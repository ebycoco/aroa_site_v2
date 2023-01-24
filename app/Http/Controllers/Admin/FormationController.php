<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Formation;
use App\Models\Translate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class FormationController extends Controller
{
    public function view()
    {
        Session::put('page', '/admin/page/formation');
        $formations = Formation::orderBy('title', 'ASC')->paginate(6);
        return view('admin.pages.formation.view', ['formations' => $formations]);
    }

    public function addFormation(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'pole_id' => 'required',
            'titre' => 'required',
            'description_fr' => 'required',
        ];

        $customMessages = [
            'pole_id.required' => 'Veuillez sélectionner le pôle svp',
            'titre.required' => 'Le titre est requis SVP !',
            'description_fr.required' => 'La description est requise SVP !',
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('document')) {
            $ressource_tmp = $request->file('document');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image
                $ressource = request('document')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $ressourceName = $ressourceTitle.'_'.time(). '.' . $extension;
                $ressourcePath = 'public/images/formations/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $ressourceName);
            }
        }else {
            $ressourceName = null;
        }

        $data['pole_id'] = json_encode($data['pole_id']);
        $user = auth()->user();

        $formation = new Formation();
        $formation->title = $request->input('titre');
        $formation->document = $ressourceName;
        $formation->description_fr = $request->input('description_fr');
        $formation->pole_id = $data['pole_id'];
        $formation->user_id = $user->id;
        $formation->save();

        if (Translate::where('lang_key', '=', $data['titre'])->count() > 0) {
            // return redirect()->back()->with('success', "titre ajouté avec succès");
        } else {
            $langKey = new Translate;
            $langKey->lang_key = $data['titre'];
            $langKey->french = $data['titre'];
            $langKey->user_id = $user->id;
            $langKey->save();

            // return redirect()->back()->with('success', "Expertise ajouté avec succès");
        }
        return redirect()->back()->with('success', 'Formation ajoutée avec succès');
    }

    public function editFormation(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'pole_id' => 'required',
            'titre' => 'required',
            'description_fr' => 'required',
        ];

        $customMessages = [
            'pole_id.required' => 'Veuillez sélectionner le pôle svp',
            'titre.required' => 'Le titre est requis SVP !',
            'description_fr.required' => 'La description est requise SVP !',
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('document')) {
            $ressource_tmp = $request->file('document');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image
                $ressource = request('document')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $ressourceName = 'formation_'.time(). '.' . $extension;
                $ressourcePath = 'public/images/formations/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $ressourceName);
            }
        }else {
            $ressourceName = null;
        }
        $data['pole_id'] = json_encode($data['pole_id']);
        $user = auth()->user();
        $formation = Formation::find($id);

        if ($ressourceName == null) {
            $formation->title = $request->input('titre');
            $formation->description_fr = $request->input('description_fr');
            $formation->description_en = $request->input('description_en');
            $formation->pole_id = $data['pole_id'];;
            $formation->user_id = $user->id;
            $formation->update();
        } else {
            $formation->title = $request->input('titre');
            $formation->document = $ressourceName;
            $formation->description_fr = $request->input('description_fr');
            $formation->description_en = $request->input('description_en');
            $formation->pole_id = $request->input('pole_id');
            $formation->user_id = $user->id;
            $formation->update();
        }

        

        $translate = Translate::where('lang_key', $request->input('old_title'))->get()->first();
        $translate->update(['lang_key' => $data['titre'], 'french' => $data['titre']]);

        return redirect()->back()->with('success', 'Référence modifiée avec succès');
    }

    public function createFormation($id)
    {
        $formation = Formation::where('id', $id)->get()->first();
        return view('admin.pages.formation.edit_formation', ['formation' => $formation]);
    }

    public function deleteFormation($id)
    {
        $formation = Formation::findOrFail($id);
        $formation->delete();
        return redirect()->back();
    }
}
