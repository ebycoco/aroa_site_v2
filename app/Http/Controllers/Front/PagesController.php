<?php

namespace App\Http\Controllers\Front;

use App\Models\Pole;
use App\Models\Contact;
use App\Models\PageAccueil;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Validator;

class PagesController extends Controller
{
    public function poles()
    {
        try {
            $poles = Pole::orderBy('nom_pole', 'ASC')->where('nom_pole', '!=', 'strategie')->limit(6)->get();
            $strategie = Pole::where('nom_pole', '=', 'strategie')->get()->first();
            return view('front.poles', ['poles' => $poles, 'strategie' => $strategie]);
        } catch (\Exception $e) {

            return $e->getMessage();
        }
    }

    public function accueil()
    {
        $accueil = PageAccueil::get()->first();
        return view('front.accueil', ['accueil' => $accueil]);
    }

    public function apropos()
    {
        return view('front.apropos');
    }

    public function contactSubmit(Request $request)
    {
        // validation
        $rules = [
            // 'nom' => 'required|regex:/(^([a-zA-Z]+)(\d+)?$)/u|max:30',
            'nom' => 'required|max:30',
            'email' => 'required|email',
            'sujet' => 'required',
            'message' => 'required'
        ];

        $customMessages = [
            'nom.required' => 'Veuillez entrer votre nom',
            // 'nom.regex' => 'Veuillez entrer un nom valide',
            'nom.max' => 'Votre nom ne peux pas exceder 30 caracteres',
            'email.required' => 'Veuillez entrer votre adresse email',
            'sujet.required' => 'Veuillez entrer l\'objet de votre demande',
            'message.required' => 'Veuillez saisir votre message',
        ];


        if ($request->ajax()) {
            $data = $request->all(); 
            $validator = Validator::make($data, $rules, $customMessages,);
            if ($validator->fails()) {
                
                return Response::json(array(
                    'success' => false,
                    'errors' => $validator->getMessageBag()->toArray()

                ), 400); // 400 being the HTTP code for an invalid request.
            } else { 
                $contact = new Contact();
                $contact->nom = $data['nom'];
                $contact->prenom = "";
                $contact->email = $data['email'];
                $contact->sujet = $data['sujet'];
                $contact->message = $data['message'];
                $contact->save();
                $datas = ['success' => 'Votre message a été envoyé avec succès !'];
                // return response()->json($datas);
                // *************************************************
                //    Debut envoi d'email
                // ***************************************************

                    $data_email = $request->all();
                    $to_nom = $data_email['nom'];
                    $to_email = $data_email['email'];
                    $data_email = array(
                        'nom' => $data_email['nom'],
                        "body" => "Notification pour contact",
                        'prenom' => "",
                        'sujet' => $data_email['sujet'],
                        'message' => $data_email['message'],
                        'email' => $data_email['email'],
                    );

                    // dd($data_email);

                    Mail::send('emails.mail', $data_email, function ($message) use ($to_nom, $to_email, $data_email) {
                        $message->to('contact@aroapartners.com', 'Aroapartners')
                            ->subject($data_email['sujet']);
                        $message->from('info@aroapartners.com', 'Aroapartners');
                    });

                    Mail::send('emails.mail', $data_email, function ($message) use ($to_nom, $to_email) {
                        $message->to($to_email, $to_nom)
                            ->subject('Notification');
                        $message->from('info@aroapartners.com', 'Aroapartners');
                    });

                    /*
            // *************************************************
            //    Fin envoi d'email
            // ***************************************************
            // */
                    return Response::json($datas, 200);
            }
        }

    }


    public function contact()
    { 
        return view('front.layouts.contact');
    }
}
