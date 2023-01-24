<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pole;
use App\Models\Translate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\IconeMetier;
use Illuminate\Support\Facades\Auth;
use Symfony\Polyfill\Iconv\Iconv;
use Session;

class PagePoleController extends Controller
{
    /*
    ==================================== Fonctions pour la page poles ===================================
    */

    public function pole()
    {
        Session::put('page', '/admin/page/pole');
        $poles = Pole::get();
        return view('admin.pages.poles', ['poles' => $poles]);
    }

    /* 
========================= Ajout de pole =======================================
*/
    public function addPole(Request $request)
    {
        $rules = [
            'nom_pole' => 'required|string',
            'logo_noir_pole' => 'required',
            'logo_blanc_pole' => 'required',
        ];

        $customMessages = [
            'nom_pole.required' => 'Veuillez entrer le nom du pôle svp',
            'nom_pole.string' => 'Le nom du pôle doit contenir uniquement les lettres',
            'logo_noir_pole.required' => 'Veuillez selectionner le logo SVP !',
            'logo_blanc_pole.required' => 'Veuillez selectionner le logo SVP !',
        ];
        $this->validate($request, $rules, $customMessages);

        if (Pole::where('nom_pole', '=', $request->input('nom_pole'))->count() > 0) {
            return redirect()->back()->with('danger', "Le pôle existe déjà");
        } else {
            $data = $request->all();
            // dd($data);
            if ($request->hasFile('logo_noir_pole')) {
                $ressource_tmp = $request->file('logo_noir_pole');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('logo_noir_pole')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameNoir = $ressourceTitle . '.' . $extension;
                    $ressourcePath = 'public/images/logo/poles/noir/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameNoir);
                }
            }
            if ($request->hasFile('logo_blanc_pole')) {
                $ressource_tmp = $request->file('logo_blanc_pole');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('logo_blanc_pole')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameBlanc = $ressourceTitle . '.' . $extension;
                    $ressourcePath = 'public/images/logo/poles/blanc/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameBlanc);
                }
            }

            // dd($ressourceNameBlanc);
            $poles = new Pole();

            $user = auth()->user();

            $poles->nom_pole = $data['nom_pole'];
            $poles->logo_noir_pole = $ressourceNameNoir;
            $poles->logo_blanc_pole = $ressourceNameBlanc;
            $poles->url = $data['url'];
            $poles->user_id = $user->id;
            $poles->save();
            // $poles->create([
            //     'nom_pole' => $data['nom_pole'],
            //     'logo_noir_pole' => $ressourceNameNoir,
            //     'logo_blanc_pole' => $ressourceNameBlanc,
            //     'url' => $data['url'],
            //     'user_id' => $user->id
            // ]);

            if (Translate::where('lang_key', '=', $data['nom_pole'])->count() > 0) {
                return redirect()->back()->with('success', "Pôle ajouté avec succès");
            } else {
                $langKey = new Translate;
                $langKey->lang_key = $data['nom_pole'];
                $langKey->french = $data['nom_pole'];
                $langKey->user_id = $user->id;
                $langKey->save();

                return redirect()->back()->with('success', "Pôle ajouté avec succès");
            }
        }
    }

    public function editPole(Request $request, $id)
    {
        try {

            $rules = [
                'nom_pole' => 'required|string',
            ];

            $customMessages = [
                'nom_pole.required' => 'Veuillez entrer le nom du pôle svp',
                'nom_pole.string' => 'Le nom du pôle doit contenir uniquement les lettres',
            ];
            $this->validate($request, $rules, $customMessages);

            $data = $request->all();

            if ($request->hasFile('logo_noir_pole')) {
                $ressource_tmp = $request->file('logo_noir_pole');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('logo_noir_pole')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameNoir = $ressourceTitle . '.' . $extension;
                    $ressourcePath = 'public/images/logo/poles/noir/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameNoir);
                }
            } else {
                $ressourceNameNoir = null;
            }

            if ($request->hasFile('logo_blanc_pole')) {
                $ressource_tmp = $request->file('logo_blanc_pole');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('logo_blanc_pole')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameBlanc = $ressourceTitle . '.' . $extension;
                    $ressourcePath = 'public/images/logo/poles/blanc/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameBlanc);
                }
            } else {
                $ressourceNameBlanc = null;
            }


            $poles = Pole::where('id', '=', $id);
            $user = Auth::user()->id;

            $translate = Translate::where('lang_key', $request->input('old_name'))->get()->first();

            if($ressourceNameNoir == null and $ressourceNameBlanc == null){
                $poles->update([
                    'nom_pole' => $data['nom_pole'],
                    'url' => $data['url'],
                    'user_id' => $user
                ]);
            }
            if($ressourceNameNoir != null){
                $poles->update([
                    
                    'logo_noir_pole' => $ressourceNameNoir,
                    'url' => $data['url'],
                    'user_id' => $user
                ]);
            }
            
            if($ressourceNameBlanc != null){
                $poles->update([
                    'logo_blanc_pole' => $ressourceNameBlanc,
                    'url' => $data['url'],
                    'user_id' => $user
                ]);
            }

            // if ($ressourceNameNoir != null) {
            //     $poles->update([
            //         'nom_pole' => $data['nom_pole'],
            //         'logo_noir_pole' => $ressourceNameNoir,
            //         'url' => $data['url'],
            //         'user_id' => $user
            //     ]);
            // } else {
            //     $poles->update([
            //         'nom_pole' => $data['nom_pole'],
            //         'url' => $data['url'],
            //         'user_id' => $user
            //     ]);
            // }

            $translate->update(['lang_key' => $data['nom_pole'], 'french' => $data['nom_pole']]);

            return redirect()->route('admin.pole')->with('success', "Pôle modifié avec success");
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function indexPole()
    {
        Session::put('page', '/admin/page/metier');
        $metiers = IconeMetier::get();
        return view('admin.pages.index_pole', ['metiers' => $metiers]);
    }

    public function addMetierIcone(Request $request)
    {
        // $data = $request->all();

        $rules = [
            'nom_metier' => 'required|string',
            'icone_noire' => 'required',
            'icone_blanche' => 'required',
            'url' => 'required',
        ];

        $customMessages = [
            'nom_metier.required' => 'Veuillez entrer le nom du metier svp',
            'nom_metier.string' => 'Le nom du metier doit contenir uniquement les lettres',
            'icone_noire.required' => 'Veuillez selectionner le logo noir SVP !',
            'icone_blanche.required' => 'Veuillez selectionner le logo blanc SVP !',
            'url.required' => 'URL requis !',
        ];
        $this->validate($request, $rules, $customMessages);

        if (IconeMetier::where('nom_icone', '=', $request->input('nom_metier'))->count() > 0) {
            return redirect()->back()->with('danger', "Le métier existe déjà");
        } else {
            $data = $request->all();

            if ($request->hasFile('icone_noire')) {
                $ressource_tmp = $request->file('icone_noire');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('icone_noire')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameNoir = $ressourceTitle .rand() . '.' . $extension;
                    $ressourcePath = 'public/images/logo/metiers/noir/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameNoir);
                }
            } else {
                $ressourceNameNoir = null;
            }

            if ($request->hasFile('icone_blanche')) {
                $ressource_tmp = $request->file('icone_blanche');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('icone_blanche')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameBlanc = $ressourceTitle .rand() . '.' . $extension;
                    $ressourcePath = 'public/images/logo/metiers/blanc/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameBlanc);
                }
            } else {
                $ressourceNameBlanc = null;
            }

            if ($request->hasFile('icone_blanche_cercle')) {
                $ressource_tmp = $request->file('icone_blanche_cercle');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('icone_blanche_cercle')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameBlanc = $ressourceTitle .rand() . '.' . $extension;
                    $ressourcePath = 'public/images/logo/metiers/blanccercle/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameBlanc);
                }
            } else {
                $ressourceNameBlanc = null;
            }
            $poles = new IconeMetier();

            $user = auth()->user();


            $poles->create([
                'nom_icone' => $data['nom_metier'],
                'icone_noire' => $ressourceNameNoir,
                'icone_blanche' => $ressourceNameBlanc,
                'icone_blanche_cercle' => $ressourceNameBlanc,
                'url' => $data['url'],
                'user_id' => $user->id
            ]);

            if (Translate::where('lang_key', '=', $data['nom_metier'])->count() > 0) {
                return redirect()->back()->with('success', "Métier ajouté avec succès");
            } else {
                $langKey = new Translate;
                $langKey->lang_key = $data['nom_metier'];
                $langKey->french = $data['nom_metier'];
                $langKey->user_id = $user->id;
                $langKey->save();

                return redirect()->back()->with('success', "Métier ajouté avec succès");
            }
        }
    }

    public function editMetier(Request $request, $id)
    {
        // $data = $request->all();
        // dd($data);
        try {

            $rules = [
                'nom_metier' => 'required|string',
                'url' => 'required|string',
            ];

            $customMessages = [
                'nom_metier.required' => 'Veuillez entrer le nom du pôle svp',
                'url.required' => 'Veuillez entrer l\'url du metier svp',
                'nom_metier.string' => 'Le nom du pôle doit contenir uniquement les lettres',
            ];
            $this->validate($request, $rules, $customMessages);

            $data = $request->all();

            if ($request->hasFile('icone_noire')) {
                $ressource_tmp = $request->file('icone_noire');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('icone_noire')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameNoir = $ressourceTitle .rand() . '.' . $extension;
                    $ressourcePath = 'public/images/logo/metiers/noir/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameNoir);
                }
            } else {
                $ressourceNameNoir = null;
            }

            if ($request->hasFile('icone_blanche')) {
                $ressource_tmp = $request->file('icone_blanche');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('icone_blanche')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameBlanc = $ressourceTitle .rand() . '.' . $extension;
                    $ressourcePath = 'public/images/logo/metiers/blanc/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameBlanc);
                }
            } else {
                $ressourceNameBlanc = null;
            }

            if ($request->hasFile('icone_blanche_cercle')) {
                $ressource_tmp = $request->file('icone_blanche_cercle');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('icone_blanche_cercle')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceNameBlancCercle = $ressourceTitle .rand() . '.' . $extension;
                    $ressourcePath = 'public/images/logo/metiers/blanccercle/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceNameBlancCercle);
                }
            } else {
                $ressourceNameBlancCercle = null;
            }


            $poles = IconeMetier::where('id', '=', $id);
            $user = Auth::user()->id;

            $translate = Translate::where('lang_key', $request->input('old_name'))->get()->first();

            if($ressourceNameNoir == null and $ressourceNameBlanc == null and $ressourceNameBlancCercle == null){
                $poles->update([
                    'nom_icone' => $data['nom_metier'],
                    'url' => $data['url'],
                    'user_id' => $user
                ]);
            }
            if($ressourceNameNoir != null){
                $poles->update([
                    'icone_noire' => $ressourceNameNoir,
                    'url' => $data['url'],
                    'user_id' => $user
                ]);
            }
            
            if($ressourceNameBlanc != null){
                $poles->update([
                    'icone_blanche' => $ressourceNameBlanc,
                    'url' => $data['url'],
                    'user_id' => $user
                ]);
            }
            if($ressourceNameBlancCercle != null){
                $poles->update([
                    'icone_blanche_cercle' => $ressourceNameBlancCercle,
                    'url' => $data['url'],
                    'user_id' => $user
                ]);
            }


            // if ($ressourceName != null) {
            //     $poles->update([
            //         'nom_icone' => $data['nom_metier'],
            //         'icone' => $ressourceName,
            //         'url' => $data['url'],
            //         'user_id' => $user
            //     ]);
            // } else {
            //     $poles->update([
            //         'nom_icone' => $data['nom_metier'],
            //         'url' => $data['url'],
            //         'user_id' => $user
            //     ]);
            // }

            $translate->update(['lang_key' => $data['nom_metier'], 'french' => $data['nom_metier']]);

            return redirect()->route('admin.pole.index')->with('success', "Metier modifié avec success");
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function deletePole($id)
    {
        $pole = Pole::findOrFail($id);
        $pole->delete();
        return redirect()->back();
    }
}
