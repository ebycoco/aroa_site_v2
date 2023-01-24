<?php

namespace App\Http\Controllers\Admin;

use Image;
use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class TeamController extends Controller
{
    public function view()
    {
        Session::put('page', '/admin/page/team');
        $teams = Team::orderBy('nom', 'ASC')->paginate(6);
        return view('admin.pages.team.view', ['teams' => $teams]);
    }

    public function addTeam(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'pole_id' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'poste' => 'required',
            'photo' => 'required|mimes:jpeg,jpg,png',
        ];

        $customMessages = [
            'pole_id.required' => 'Veuillez sélectionner le pôle svp',
            'nom.required' => 'Le nom est requis SVP !',
            'prenom.required' => 'Le prénom est requis SVP !',
            'email.required' => 'Email est requis SVP !',
            'email.email' => 'Email non conforme !',
            'poste.required' => 'Le poste est requis SVP !',
            'photo.required' => 'L\image est requise',
            'photo.mimes' => 'L\'image doit etre de type "jpeg, jpg, png"'
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('photo')) {
            $image_tmp = $request->file('photo');
            if ($image_tmp->isValid()) {
                //obtenir l'extension de l'image
                $extension = $image_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image
                $image = request('photo')->getClientOriginalName();
                $imageTitle = pathinfo($image, PATHINFO_FILENAME);
                $photoName = $imageTitle . '_' . time() . '.' . $extension;
                $photoPathSmall = 'public/images/team/small/' . $photoName;
                $photoPathLarge = 'public/images/team/large/' . $photoName;
                //charger l'image
                Image::make($image_tmp)->resize(350, 230)->save($photoPathSmall);
                Image::make($image_tmp)->save($photoPathLarge);
            }
        } else {
            $photoName = null;
        }



        // if ($request->hasFile('photo')) {
        //     $ressource_tmp = $request->file('photo');
        //     if ($ressource_tmp->isValid()) {
        //         //obtenir l'extension de l'photo
        //         $extension = $ressource_tmp->getClientOriginalExtension();
        //         //Generer un nouveau nom d'photo
        //         $ressource = request('photo')->getClientOriginalName();
        //         $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
        //         $ressourceName = $ressourceTitle . '.' . $extension;
        //         $ressourcePath = 'public/images/teams/';
        //         //charger l'image
        //         $ressource_tmp->move($ressourcePath, $ressourceName);
        //     }
        // } else {
        //     $ressourceName = null;
        // }

        // $category = new Team();

        $user = auth()->user();

        $team = new Team();
        $team->nom = $request->input('nom');
        $team->prenom = $request->input('prenom');
        $team->email = $request->input('email');
        $team->telephone = $request->input('telephone');
        $team->photo = $photoName;
        $team->poste = $request->input('poste');
        $team->facebook = $request->input('facebook');
        $team->linkedin = $request->input('linkedin');
        $team->twitter = $request->input('twitter');
        $team->pole_id = $request->input('pole_id');
        $team->user_id = $user->id;
        $team->save();
        return redirect()->back()->with('success', 'Membre ajouté avec succès');
    }

    public function editTeam(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'pole_id' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required|email',
            'poste' => 'required',
            // 'photo' => 'required|mimes:jpeg,jpg,png',
        ];

        $customMessages = [
            'pole_id.required' => 'Veuillez sélectionner le pôle svp',
            'nom.required' => 'Le nom est requis SVP !',
            'prenom.required' => 'Le prénom est requis SVP !',
            'email.required' => 'Email est requis SVP !',
            'email.email' => 'Email non conforme !',
            'poste.required' => 'Le poste est requis SVP !',
            // 'photo.required' => 'L\image est requise',
            // 'photo.mimes' => 'L\'image doit etre de type "jpeg, jpg, png"'
        ];
        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('photo')) {
            $image_tmp = $request->file('photo');
            if ($image_tmp->isValid()) {
                //obtenir l'extension de l'image
                $extension = $image_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image
                $image = request('photo')->getClientOriginalName();
                $imageTitle = pathinfo($image, PATHINFO_FILENAME);
                $photoName = $imageTitle . '_' . time() . '.' . $extension;
                $photoPathSmall = 'public/images/team/small/' . $photoName;
                $photoPathLarge = 'public/images/team/large/' . $photoName;
                //charger l'image
                Image::make($image_tmp)->resize(350, 230)->save($photoPathSmall);
                Image::make($image_tmp)->save($photoPathLarge);
            }
        } else {
            $photoName = null;
        }

        $team = Team::findOrFail($id);
        $user = auth()->user();

        // $team = new Team();
        $team->nom = $request->input('nom');
        $team->prenom = $request->input('prenom');
        $team->email = $request->input('email');
        $team->telephone = $request->input('telephone');
        if (isset($photoName)){
            $team->photo = $photoName;
        }
        // $team->photo = $photoName;
        $team->poste = $request->input('poste');
        $team->facebook = $request->input('facebook');
        $team->linkedin = $request->input('linkedin');
        $team->twitter = $request->input('twitter');
        $team->pole_id = $request->input('pole_id');
        $team->user_id = $user->id;
        $team->update();
        return redirect()->back()->with('success', 'Membre ajouté avec succès');

    }

    public function deleteTeam($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();
        return redirect()->back();
    }
}
