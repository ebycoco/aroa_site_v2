<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Reference;
use App\Models\Translate;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ReferenceController extends Controller
{
    public function view()
    {
        Session::put('page', '/admin/page/reference');
        $references = Reference::orderBy('title', 'ASC')->paginate(6);
        return view('admin.pages.reference.view', ['references' => $references]);
    }

    public function addReference(Request $request)
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

        // if ($request->hasFile('photo')) {
        //     $image_tmp = $request->file('photo');
        //     if ($image_tmp->isValid()) {
        //         //obtenir l'extension de l'image
        //         $extension = $image_tmp->getClientOriginalExtension();
        //         //Generer un nouveau nom d'image
        //         $image = request('photo')->getClientOriginalName();
        //         $imageTitle = pathinfo($image, PATHINFO_FILENAME);
        //         $photoName = $imageTitle . '_' . time() . '.' . $extension;
        //         $photoPathSmall = 'public/images/reference/small/' . $photoName;
        //         $photoPathLarge = 'public/images/reference/large/' . $photoName;
        //         //charger l'image
        //         Image::make($image_tmp)->resize(350, 230)->save($photoPathSmall);
        //         Image::make($image_tmp)->save($photoPathLarge);
        //     }
        // } else {
        //     $photoName = null;
        // }


        $user = auth()->user();

        $reference = new Reference();
        $reference->title = $request->input('titre');
        $reference->description_fr = $request->input('description_fr');
        $reference->pole_id = $request->input('pole_id');
        $reference->user_id = $user->id;
        $reference->save();

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
        return redirect()->back()->with('success', 'Référence ajoutée avec succès');
    }

    public function editReference(Request $request, $id)
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

        $user = auth()->user();

        $reference = Reference::find($id);
        $reference->title = $request->input('titre');
        $reference->description_fr = $request->input('description_fr');
        $reference->description_en = $request->input('description_en');
        $reference->pole_id = $request->input('pole_id');
        $reference->user_id = $user->id;
        $reference->update();

        $translate = Translate::where('lang_key', $request->input('old_title'))->get()->first();
        $translate->update(['lang_key' => $data['titre'], 'french' => $data['titre']]);

        return redirect()->back()->with('success', 'Référence modifiée avec succès');
    }

    public function createReference($id)
    {
        $reference = Reference::where('id', $id)->get()->first();
        return view('admin.pages.reference.edit_reference', ['reference' => $reference]);
    }

    public function deleteReference($id)
    {
        $team = Reference::findOrFail($id);
        $team->delete();
        return redirect()->back();
    }
}
