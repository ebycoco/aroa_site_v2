<?php

namespace App\Http\Controllers\Admin;

use App\Models\OffreEmploi;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class OffreEmploiController extends Controller
{
    public function index()
    {
        Session::put('page', '/admin/page/emploi');
        $emplois = OffreEmploi::orderBy('title_offre', "ASC")->paginate(6);
        return view('admin.pages.offres.index', ['emplois' => $emplois]);
    }

    public function createOffre()
    {
        return view('admin.pages.offres.create_offre');
    }

    public function addOffre(Request $request)
    {
        $data = $request->all();
        // dd($data);

        $rules = [
            'pole_id' => 'required',
            'title_offre' => 'required',
            'content_fr' => 'required',
            'image_offre' => 'required|mimes:jpeg,jpg,png',
        ];

        $customMessages = [
            'pole_id.required' => 'Veuillez sélectionner le pôle svp',
            'title_offre.required' => 'Le titre est requis SVP !',
            'content_fr.required' => 'L\'article est requis SVP !',
            'image_offre.required' => 'L\image est requise',
            'image_offre.mimes' => 'L\'image doit etre de type "jpeg, jpg, png"'
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('image_offre')) {
            $ressource_tmp = $request->file('image_offre');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image_offre
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image_offre
                $ressource = request('image_offre')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $ressourceName = $ressourceTitle . '.' . $extension;
                $ressourcePath = 'public/images/offres/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $ressourceName);
            }
        } else {
            $ressourceName = null;
        }

        $offre = new OffreEmploi();

        $user = auth()->user();

        $offre->create([
            'image_offre' => $ressourceName,
            'title_offre' => $data['title_offre'],
            'meta_title' => $data['meta_title_offre'],
            'pole_id' => $data['pole_id'],
            'meta_description' => $data['meta_description_offre'],
            'date_post' => $data['date_post_offre'],
            'heure_post' => $data['heure_post_offre'],
            'content_fr' => $data['content_fr'],
            'content_en' => $data['content_en'],
            'user_id' => $user->id
        ]);

        return redirect()->route('admin.offre.index')->with('success', "Offre d'emploi ajoutée avec succès");
    }

    public function updateOffre ($id)
    {
        $offre = OffreEmploi::where('id', $id)->get()->first();
        return view('admin.pages.offres.edit_offre', ['offre' => $offre]);
    }

    public function editOffre(Request $request, $id)
    {
        
        $data = $request->all();

        $rules = [
            'pole_id' => 'required',
            'title_offre' => 'required',
            'content_fr' => 'required',
            // 'image_offre' => 'required|mimes:jpeg,jpg,png',
        ];

        $customMessages = [
            'pole_id.required' => 'Veuillez sélectionner le pôle svp',
            'title_offre.required' => 'Le titre est requis SVP !',
            'content_fr.required' => 'L\'article est requis SVP !',
            // 'image_offre.required' => 'L\image est requise',
            // 'image_offre.mimes' => 'L\'image doit etre de type "jpeg, jpg, png"',
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('image_offre')) {
            $ressource_tmp = $request->file('image_offre');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image_offre
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image_offre
                $ressource = request('image_offre')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $ressourceName = $ressourceTitle . '.' . $extension;
                $ressourcePath = 'public/images/offres/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $ressourceName);
            }
        } else {
            $ressourceName = null;
        }

        $offre = OffreEmploi::where('id', $id)->get()->first();

        $user = auth()->user();

        if($ressourceName == null){
            $offre->update([
                'title_offre' => $data['title_offre'],
                'meta_title' => $data['meta_title_offre'],
                'pole_id' => $data['pole_id'],
                'meta_description' => $data['meta_description_offre'],
                'date_post' => $data['date_post_offre'],
                'heure_post' => $data['heure_post_offre'],
                'content_fr' => $data['content_fr'],
                'content_en' => $data['content_en'],
                'user_id' => $user->id
            ]);
        }else{
            $offre->update([
                'image_offre' => $ressourceName,
                'title_offre' => $data['title_offre'],
                'meta_title' => $data['meta_title_offre'],
                'pole_id' => $data['pole_id'],
                'meta_description' => $data['meta_description_offre'],
                'date_post' => $data['date_post_offre'],
                'heure_post' => $data['heure_post_offre'],
                'content_fr' => $data['content_fr'],
                'content_en' => $data['content_en'],
                'user_id' => $user->id
            ]);
        }
        return redirect()->back()->with('success', "Offre d'emploi ajoutée avec succès");
    }

    public function deleteOffre($id)
    {
        $offre = OffreEmploi::findOrFail($id);
        $offre->delete();
        return redirect()->back();
    }
}
