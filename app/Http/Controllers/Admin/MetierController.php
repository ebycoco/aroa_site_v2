<?php

namespace App\Http\Controllers\Admin;

use App\Models\Translate;
use App\Models\Presentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Session;

class MetierController extends Controller
{
    public function presentation()
    {
        Session::put('page', '/admin/page/presentation');
        // $presentations = Presentation::with('pole')->orderBy('nom_pole')->get();
        $presentations = DB::table('presentations')
            ->select('presentations.*', 'poles.nom_pole')
            ->join('poles', 'poles.id', '=', 'presentations.pole_id')
            ->orderBy('nom_pole', 'ASC')
            ->get();
        return view('admin.pages.metiers.presentation', ['presentations' => $presentations]);
    }


    public function addPresentation(Request $request)
    {

        $rules = [
            'pole' => 'required',
            'presentation' => 'required',
            'image' => 'required',
        ];

        $customMessages = [
            'pole.required' => 'Veuillez sélectionner le pôle svp',
            'presentation.required' => 'La présentation es requise SVP !',
            'image.required' => 'Image requise !',
        ];
        $this->validate($request, $rules, $customMessages);

        if (Presentation::where('pole_id', '=', $request->input('pole'))->count() > 0) {
            return redirect()->back()->with('danger', "Le métier existe déjà");
        } else {
            $data = $request->all();

            if ($request->hasFile('image')) {
                $ressource_tmp = $request->file('image');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('image')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $ressourceName = $ressourceTitle . '.' . $extension;
                    $ressourcePath = 'public/images/presentations/poles/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $ressourceName);
                }
            }

            $presentation = new Presentation();

            $user = auth()->user();


            $presentation->create([
                'presentation' => $data['presentation'],
                'image' => $ressourceName,
                'pole_id' => $data['pole'],
                'user_id' => $user->id
            ]);

            if (Translate::where('lang_key', '=', $data['presentation'])->count() > 0) {
                return redirect()->back()->with('success', "Métier ajouté avec succès");
            } else {
                $langKey = new Translate;
                $langKey->lang_key = $data['presentation'];
                $langKey->french = $data['presentation'];
                $langKey->user_id = $user->id;
                $langKey->save();

                return redirect()->back()->with('success', "Métier ajouté avec succès");
            }
        }
    }

    public function editPresentation($id)
    {
        $presentation = Presentation::where('id', $id)->get()->first();
        return view('admin.pages.metiers.edit_presentation', ['presentation' => $presentation]);
    }

    public function updatePresentation(Request $request, $id)
    {
        $data = $request->all();

        $rules = [
            'presentation' => 'required',
            // 'image' => 'required',
        ];

        $customMessages = [
            'presentation.required' => 'La présentation es requise SVP !',
            // 'image.required' => 'Image requise !',
        ];
        $this->validate($request, $rules, $customMessages);



        if ($request->hasFile('image')) {
            $ressource_tmp = $request->file('image');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image
                $ressource = request('image')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $ressourceName = $ressourceTitle . '.' . $extension;
                $ressourcePath = 'public/images/presentations/poles/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $ressourceName);
            }
        }else {
            $ressourceName = null;
        }

        $presentation = Presentation::where('id', $id);

        $user = auth()->user();

        if ($ressourceName != null) {
            $presentation->update([
                'presentation_fr' => $data['presentation'],
                'presentation_en' => $data['presentation_en'],
                'image' => $ressourceName,
                'user_id' => $user->id
            ]);

        } else {
            $presentation->update([
                'presentation_fr' => $data['presentation'],
                'presentation_en' => $data['presentation_en'],
                'user_id' => $user->id
            ]);
        }

        return redirect()->back()->with('success', "Presentation modifiée avec succès");
    }


}
