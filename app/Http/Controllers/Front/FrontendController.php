<?php

namespace App\Http\Controllers\Front;

use App\Models\Blog;
use App\Models\Pole;
use App\Models\Team;
use App\Models\Expertise;
use App\Models\Formation;
use App\Models\Reference;
use App\Models\Candidature;
use App\Models\IconeMetier;
use App\Models\OffreEmploi;
use App\Models\Presentation;
use Illuminate\Http\Request;
use App\Models\CategoryArticle;
use Illuminate\Support\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;

class FrontendController extends Controller
{
    public function blogDetails($pole, $id)
    {
        $pole_info = Pole::where('url', $pole)->get()->first();
        $metiers = IconeMetier::orderBy('nom_icone', 'ASC')->latest()->limit(6)->get();
        $article = Blog::where('id', $id)->get()->first();
        $articles = Blog::orderBy('title_article', 'ASC')->latest()->limit(8)->get();
        $categories = CategoryArticle::orderBy('title_category', 'ASC')->limit(8)->get();
        // dd($pole);
        return view('front.metiers.blog_details', ['articles' => $articles, 'article' => $article, 'pole' => $pole_info, 'metiers' => $metiers, 'categories' => $categories]);
    }

    public function blog($pole)
    {
        Session::put('page', 'Blog');
        $pole_info = Pole::where('url', $pole)->get()->first();
        $metiers = IconeMetier::orderBy('nom_icone', 'ASC')->latest()->limit(6)->get();
        $articles = Blog::where('pole_id', $pole_info->id)->get();
        // dd($articles);
        return view('front.metiers.blog', ['articles' => $articles, 'pole' => $pole_info, 'metiers' => $metiers]);
    }

    public function presentation($pole)
    {
        Session::put('page', 'Presentation');
        $pole_info = Pole::where('url', $pole)->get()->first();

        $expertises = Expertise::orderBy('titre_expertise', "ASC")->where('pole_id', $pole_info->id)->get();

        $metiers = IconeMetier::orderBy('nom_icone', 'ASC')->latest()->limit(6)->get();

        $presentation = Presentation::where('pole_id', $pole_info->id)->get()->first();
        // dd($presentation);
        return view('front.metiers.presentation', ['presentation' => $presentation, 'expertises' => $expertises, 'pole' => $pole_info, 'metiers' => $metiers]);
    }

    public function offreEmploi($pole)
    {
        Session::put('page', 'offre d\'emploi');
        $pole_info = Pole::where('url', $pole)->get()->first();
        $metiers = IconeMetier::orderBy('nom_icone', 'ASC')->latest()->limit(6)->get();
        $offre = OffreEmploi::where('pole_id', $pole_info->id)->get()->first();
        $offres = OffreEmploi::where('pole_id', $pole_info->id)->get();
        // dd($offres);
        return view('front.metiers.offre', ['offre' => $offre,'offres' => $offres, 'pole' => $pole_info, 'metiers' => $metiers]);
    }

    public function offreEmploiDetails($pole, $id)
    {

        Session::put('page', 'offre d\'emploi');
        $pole_info = Pole::where('url', $pole)->get()->first();
        $metiers = IconeMetier::orderBy('nom_icone', 'ASC')->latest()->limit(6)->get();
        $emploi = OffreEmploi::where('id', $id)->get()->first();

        $offres = OffreEmploi::get();
        // dd($offre->id);
        $poles = Pole::where('id', $pole_info->id)->get();


        $collection = new Collection($offres);
        $collect_offres = [];
        foreach ($offres as $offre) {
            array_push($collect_offres, $offre->pole->nom_pole);
            // array_push($collect_offres, ['nom'=>$offre->pole->nom_pole, 'url'=>$offre->pole->url, 'pole_id'=>$offre->pole->pole_id]);

        }
        // dd($collect_offres);
        $offres_poles = array_unique($collect_offres);
        // $offres_poles = $collect_offres;
        return view('front.metiers.offre_detail', ['offres_poles' => $offres_poles, 'offres' => $offres, 'emploi' => $emploi, 'pole' => $pole_info, 'metiers' => $metiers]);
    }

    public function equipe($pole)
    {
        //
        Session::put('page', 'Equipe');
        $pole_info = Pole::where('url', $pole)->get()->first();
        $metiers = IconeMetier::orderBy('nom_icone', 'ASC')->latest()->limit(6)->get();

        $teams = Team::orderBy('nom', 'ASC')->where('pole_id', $pole_info->id)->get();
        // dd($teams);

        return view('front.metiers.team', ['pole' => $pole_info, 'metiers' => $metiers, 'teams' => $teams]);
    }

    public function reference($pole)
    {
        // reference
        Session::put('page', 'Reference');
        $pole_info = Pole::where('url', $pole)->get()->first();
        $metiers = IconeMetier::orderBy('nom_icone', 'ASC')->latest()->limit(6)->get();

        $references = Reference::orderBy('title', 'ASC')->where('pole_id', $pole_info->id)->get();
        // dd($references);

        return view('front.metiers.reference', ['pole' => $pole_info, 'metiers' => $metiers, 'references' => $references]);
    }

    public function formation($pole)
    {
        // reference
        Session::put('page', 'Formations');
        $pole_info = Pole::where('url', $pole)->get()->first();
        $metiers = IconeMetier::orderBy('nom_icone', 'ASC')->latest()->limit(6)->get();

        $formations = Formation::orderBy('title', 'ASC')->where([['pole_id', 'LIKE', "%" . $pole_info->id . "%"]])->get();
        // dd($formations);

        return view('front.metiers.formation', ['pole' => $pole_info, 'metiers' => $metiers, 'formations' => $formations]);
    }

    public function postuler(Request $request)
    {
        try {
            $data = $request->all();
            // dd($data);

            //   Validation du formualire
            // $clientMime = $document->getClientMimeType();
            $rules = [
                'nom' => 'required', /* |regex:/(^([a-zA-Z]+)(\d+)?$)/u */
                'prenoms' => 'required|',
                'email' => 'required|email|max:255',
                'lm' => 'required|mimes:doc,docx,pdf|max:2048',
                'cv' => 'required|mimes:pdf,doc,docx|max:5048',
            ];
            $customMessages = [
                'nom.required' => 'Veuillez entrer votre nom',
                'email.required' => 'Veuillez entrer votre email',
                'email.email' => 'adresse email invalide',
                'email.max' => 'Adresse trop longue',
                'prenoms.required' => 'Veuillez entrer votre prenom',
                'prenoms.regex' => 'Veuillez entrer un prenom valide',
                'lm.required' => 'Lettre de motivation requis pour la suite',
                'lm.mimes' => ' Veuillez mettre un fichier qui a pour extension pdf,doc ou docx pour votre lettre de motivation',
                'lm.max' => 'La taille de votre lettre de motivation ne dois pas depasser 2Mo',
                'cv.required' => 'CV requis pour la suite',
                'cv.mimes' => ' Veuillez mettre un fichier qui a pour extension pdf,doc ou docx pour votre CV',
                'cv.max' => 'La taille de votre  CV ne dois pas depasser 2Mo',
            ];

            $this->validate($request, $rules, $customMessages);

            if ($request->hasFile('lm')) {
                $ressource_tmp = $request->file('lm');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('lm')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $newFileName = $ressourceTitle . '_' . time() . '.' . $extension;
                    $ressourcePath = 'public/images/candidature_reponse/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $newFileName);
                }
            }

            if ($request->hasFile('cv')) {
                $ressource_tmp = $request->file('cv');
                if ($ressource_tmp->isValid()) {
                    //obtenir l'extension de l'image
                    $extension = $ressource_tmp->getClientOriginalExtension();
                    //Generer un nouveau nom d'image
                    $ressource = request('cv')->getClientOriginalName();
                    $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                    $cvFileNames = $ressourceTitle . '_' . time() . '.' . $extension;
                    $ressourcePath = 'public/images/candidature_reponse/';
                    //charger l'image
                    $ressource_tmp->move($ressourcePath, $cvFileNames);
                }
            }




            $to_email = $data['email'];
            $datas = array(
                'name' => $data['nom'],
                "body" => "Notification pour Candidature",
                'prenom' => $data['prenoms'],
                'email' => $data['email'],
                'cv' => $cvFileNames,
                'lm' => $newFileName,
            );
            // dd($data);
            Mail::send('candidature', $datas, function ($message) use ($request) {
                $message->from('info@aroapartners.com', 'Aroapartners');
                $message->to($request->email, 'Aroapartners')->subject('Offre d\'emploi');
            });
            Mail::send('aroa', $datas, function ($message) use ($request) {
                $message->from('info@aroapartners.com', 'Aroapartners');
                $message->to("info@aroapartners.com", 'Aroapartners')->subject('Offre d\'emploi');
            });

            $candidature = new Candidature();

            $candidature->nom = $data['nom'];
            $candidature->offre_id = $data['offre_id'];
            $candidature->prenom = $data['prenoms'];
            $candidature->email = $data['email'];
            $candidature->cv = $cvFileNames;
            $candidature->lm = $newFileName;

            $candidature->save();

            return back()->with('success', 'Nous avons reçu votre dossier de candidature!');
        } catch (\Exception $e) {

            // return $e->getMessage();
            return back()->with('echec', 'L\envoie a échoué !');
        }
    }

    public function spontanePostuler(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $rules = [
            'nom' => 'required', /* |regex:/(^([a-zA-Z]+)(\d+)?$)/u */
            'prenoms' => 'required|',
            'email' => 'required|email|max:255',
            'lm' => 'required|mimes:doc,docx,pdf|max:2048',
            'cv' => 'required|mimes:pdf,doc,docx|max:5048',
        ];
        $customMessages = [
            'nom.required' => 'Veuillez entrer votre nom',
            'email.required' => 'Veuillez entrer votre email',
            'prenoms.required' => 'Veuillez entrer votre prenom',
            'lm.required' => 'Lettre de motivation requis pour la suite',
            'lm.mimes' => ' Veuillez mettre un fichier qui a pour extension pdf,doc ou docx pour votre lettre de motivation',
            'lm.max' => 'La taille de votre lettre de motivation ne dois pas depasser 2Mo',
            'cv.required' => 'CV requis pour la suite',
            'cv.mimes' => ' Veuillez mettre un fichier qui a pour extension pdf,doc ou docx pour votre CV',
            'cv.max' => 'La taille de votre  CV ne dois pas depasser 2Mo',
        ];

        $this->validate($request, $rules, $customMessages);

        if ($request->hasFile('lm')) {
            $ressource_tmp = $request->file('lm');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image
                $ressource = request('lm')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $newFileName = $ressourceTitle . '_' . time() . '.' . $extension;
                $ressourcePath = 'public/images/candidature_reponse/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $newFileName);
            }
        }

        if ($request->hasFile('cv')) {
            $ressource_tmp = $request->file('cv');
            if ($ressource_tmp->isValid()) {
                //obtenir l'extension de l'image
                $extension = $ressource_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image
                $ressource = request('cv')->getClientOriginalName();
                $ressourceTitle = pathinfo($ressource, PATHINFO_FILENAME);
                $cvFileNames = $ressourceTitle . '_' . time() . '.' . $extension;
                $ressourcePath = 'public/images/candidature_reponse/';
                //charger l'image
                $ressource_tmp->move($ressourcePath, $cvFileNames);
            }
        }
        $to_email = $data['email'];
            $datas = array(
                'name' => $data['nom'],
                "body" => "Notification pour Candidature",
                'prenom' => $data['prenoms'],
                'email' => $data['email'],
                'cv' => $cvFileNames,
                'lm' => $newFileName,
            );
            // dd($data);
            Mail::send('candidature', $datas, function ($message) use ($request) {
                $message->from('info@aroapartners.com', 'Aroapartners');
                $message->to($request->email, 'Aroapartners')->subject('Offre d\'emploi');
            });
            Mail::send('aroa', $datas, function ($message) use ($request) {
                $message->from('info@aroapartners.com', 'Aroapartners');
                $message->to("info@aroapartners.com", 'Aroapartners')->subject('Offre d\'emploi');
            });

            $candidature = new Candidature();

            $candidature->nom = $data['nom'];
            $candidature->offre_id = 1;
            $candidature->prenom = $data['prenoms'];
            $candidature->email = $data['email'];
            $candidature->cv = $cvFileNames;
            $candidature->lm = $newFileName;

            $candidature->save();

            return back()->with('success', 'Nous avons reçu votre dossier de candidature!');
    }
}
