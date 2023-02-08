<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Session;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;


class AdminAuthController extends Controller
{
     // Connexion
     /**
      * Summary of login
      * @param Request $request
      * @return mixed
      */
     public function login(Request $request)
     {
         try {
             if ($request->isMethod('post')) {
                 // dd($request->input());
                 # Traitement de la connexion
                 $data = $request->input();
                 // dd(bcrypt($data['password']));
                 if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 1])) {
                     // $role = Admin::select('role_id')->where('email', $data['email'])->get()->first();
                     // $value = Admin::where('email', $data['email'])->get()->first();

                     // Session::set('user', $value);
                     return redirect()->route('admin.dashboard');
                 } else {
                    Session::flash('error', 'Identifiant ou mot de passe incorrect');
                     return view('admin.auth.login');
                 }
             }else{
                Session::flash('error', 'Veuillez vous connecter');
                return view('admin.auth.login');
             }

         } catch (\Exception $e) {
             $message = $e->getMessage();
             return view('errors.404', ['error' => $message]);
         }
     }

     //Déconnexion
     /**
      * Summary of logout
      * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
      */
     public function logout()
     {
         Auth::guard('admin')->logout();
         return redirect('admin');
     }

     /**
      * Summary of oublie
      * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
      */
     public function oublie()
     {
         return view('admin.auth.password_forget');
     }

      /**
       * Summary of reset
       * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
       */

     public function reset()
     {
         return view('admin.auth.reset_password');
     }

     /**
      * Summary of password_email
      * @param Request $request
      * @return string
      */
     public function password_email(Request $request)
     {
        $rules = [
            'email' => 'required|email|exists:admins,email',
        ];

        $customMessages = [
            'email.required' => "L'email est requis",
            "email.email" => 'Veuillez saisir une adresse email valide',
            "email.exists" => "l'adresse n'existe pas",
        ];
        $this->validate($request, $rules, $customMessages);
        $token = Str::random(64);
        DB::table('password_resets')->insert(
            [
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);
        $action_link = route('password-reset', ['token' => $token, 'email' => $request->email]);
        return 'test';

    }
    /**
     * Summary of showForgotForm
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showForgotForm()
    {
        return view('admin.auth.forgot');
    }

    /**
     * Summary of sendResetLink
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function sendResetLink(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
        ]);

        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        $action_link = route('reset.password.form', ['token' => $token, 'email' => $request->email]);
        $body ="We are received a request to reset the password for <b>Your app name</b> account associated with ".$request->email.". You can reset your password by clicking the link below";

        Mail::send('email-forgot', ['action_link' => $action_link, 'body' => $body], function($message) use ($request){
            $message->from('info@aroapartners.com', 'Your app Name');
            $message->to($request->email, 'Your Name')->subject('Reset Password');
        });

        return back()->with('success', 'We have e-mailled your password reset link');
    }

    /**
     * Summary of showResetForm
     * @param Request $request
     * @param mixed $token
     * @return \Illuminate\Contracts\View\View|mixed
     */
    public function showResetForm(Request $request, $token = null)
    {
        return view('admin.auth.reset')->with(['token' => $token, 'email' => $request->email]);
    }
    /**
     * Summary of resetPassword
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function resetPassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:admins,email',
            'password' => 'required|min:5|confirmed',
            'password_confirmation' => 'required',
        ]);

        $check_token = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token,
        ])->first();

        if (!$check_token) {
            return back()->withInput()->with('fail', 'Token invalide');
        }else{
            Admin::where('email', $request->email)->update([
                'password' => Hash::make($request->password)
            ]);
            DB::table('password_resets')->where([
                'email' => $request->email
            ])->delete();
            return redirect()->route('admin.login')->with('info', 'Your password has been changed! you can login with new password')->with('verifieldEmail', $request->email);
        }
    }
}

