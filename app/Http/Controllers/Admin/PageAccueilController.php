<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pole;
use App\Models\Translate;
use App\Models\PageAccueil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Session;

class PageAccueilController extends Controller
{
    public function index()
    {
        Session::put('page', '/admin/page/accueil');
        $datas = [];
        $datas['video'] = PageAccueil::get('video')->last();
        $datas['nom'] = PageAccueil::get('nom_entreprise')->last();
        $datas['slogant'] = PageAccueil::get('slogant')->last();
        $datas['message'] = PageAccueil::get('message')->last();
        return view('admin.pages.accueil', ['datas' => $datas]);
    }
    public function video(Request $request)
    {
        $data = $request->all();
        $page = PageAccueil::where('id', 1);
        if ($request->hasFile('video')) {
            $ressource_tmp = $request->file('video');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image
                $ressource = request('video')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $ressourceName = $ressourceTitle . '_' . time() . '.' . $extension;
                $ressourcePath = 'public/images/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $ressourceName);
            }
        }


        // PageAccueil::create([
        //     'video' => $ressourceName,
        //     'user_id' => Auth::user()->id,
        // ]);

        $insert['video'] = $ressourceName;
        $user = Auth::user()->id;

        $page->update([
            'video' => $ressourceName,
            'user_id' => $user

        ]);
        return redirect()->back()->with('sucess', "Video ajoutée avec success");
    }

    public function name(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'nom_entreprise' => 'required'
        ]);

        $page = PageAccueil::where('id', 1);

        $nom_entreprise = $data['nom_entreprise'];

        // dd($nom_entreprise);

        $user = Auth::user()->id;

        $page->update([
            'nom_entreprise' => $nom_entreprise,
            'user_id' => $user
        ]);

        return redirect()->back()->with('sucess', "Nom ajouté avec success");
    }

    public function slogant(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'slogant' => 'required'
        ]);

        $page = PageAccueil::where('id', 1);

        $slogant = $data['slogant'];

        // dd($slogant);

        $user = Auth::user()->id;

        $page->update([
            'slogant' => $slogant,
            'user_id' => $user
        ]);

        return redirect()->back()->with('sucess', "Slogant ajouté avec success");
    }

    public function message(Request $request)
    {
        $data = $request->all();
        $request->validate([
            'message' => 'required'
        ]);

        $page = PageAccueil::where('id', 1);

        $message = $data['message'];

        // dd($message);

        $user = Auth::user()->id;

        $page->update([
            'message' => $message,
            'user_id' => $user
        ]);

        return redirect()->back()->with('sucess', "message ajouté avec success");
    }

    
    
}
