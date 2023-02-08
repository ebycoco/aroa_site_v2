<?php

namespace App\Http\Controllers\Admin;

use Auth;
use Image;
use Session;
use App\Models\Blog;
use App\Models\Admin;
use App\Models\Role;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\OffreEmploi;
use App\Models\Pole;
use App\Models\Team;
use Illuminate\Support\Facades\Hash;
use App\Models\Visitor;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;


class AdminController extends Controller
{

    // Constructeur
    /**
     * Summary of __construct
     * @param Admin $admin
     */
    public function __construct(Admin $admin)
    {
        $this->admin = $admin;
        $this->middleware('admin');
    }

    // documentation
    /**
     * Summary of documentation
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function documentation()
    {
        Session::put('page', '/admin/documentation');
        $user = Auth::user();
    return view('admin.doc.documentation');

    }

    //Tableau de bord
    /**
     * Summary of dashboard
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function dashboard(Request $request)
    {
        Session::put('page', '/admin/dashboard');
        $user = Auth::user();
        $articles = Blog::all();
        $offres = OffreEmploi::all();
        $equipes = Team::all();
        $poles = Pole::all();
        $visitors = Visitor::all();

        $startOfLastWeek  = Carbon::now()->subDays(7)->startOfWeek();
        $endOfLastWeek  = Carbon::now()->subDays(7)->endOfWeek();

        $date = \Carbon\Carbon::today()->subDays(7);

        $currentDate = \Carbon\Carbon::now();
        $agoDate = $currentDate->subDays($currentDate->dayOfWeek)->subWeek();

        $visitors_current_week = Visitor::select('date', DB::raw('count(*) as total'))->whereBetween('date', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->groupBy('date')->get();
        $visitors_last_week = Visitor::select('date', DB::raw('count(*) as total'))->whereBetween('date', [$startOfLastWeek, $endOfLastWeek])->groupBy('date')->get();

        $chart_data_current_week = array();
        foreach ($visitors_current_week as $data) {
            array_push($chart_data_current_week, array($data->date->format('d.m.Y'), $data->total));
        }

        $chart_data_last_week = array();
        foreach ($visitors_last_week as $data) {
            array_push($chart_data_last_week, array($data->date->format('d.m.Y'), $data->total));
        }

        $visitors_datas = array();
        $visitors_datas['visitors_current_week'] = $chart_data_current_week;
        $visitors_datas['visitors_last_week'] = $chart_data_last_week;
        $today = now()->startOfDay();
        $visitorsToday = Visitor::whereDate('date', $today)->count();
        $startOfWeek = now()->startOfWeek();
        $endOfWeek = now()->endOfWeek();
        $visitorsThisWeek = Visitor::whereBetween('date', [$startOfWeek, $endOfWeek])->count();
        // dd($visitorsToday);


        return view('admin.dashboard', ['visitorsThisWeek'=>$visitorsThisWeek,'visitorsToday'=>$visitorsToday,'user' => $user, 'articles' => $articles, 'offres' => $offres, 'equipes' => $equipes, 'poles' => $poles,'visitors'=>$visitors, 'visitors_datas' => $visitors_datas]);
    }

    // Création d'un utilisateur
    /**
     * Summary of create
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\RedirectResponse|mixed
     */
    public function create(Request $request)
    {
        try {
            Session::put('page', '/admin/create');

            $data = $request->input();
            // dd($data);

            $rules = [
                'nom' => 'required',
                'prenoms' => 'required',
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];

            $customMessage = [
                'nom.required' => 'Le nom est requis',
                'prenoms.required' => 'Le(s) prénom(s) est/sont requis',
                'email.required' => 'Email est requis',
                'email.email' => 'Veuillez saisir une adresse email valide',
                'password.required' => 'Le mot de passe est requis',
            ];
            $this->validate($request, $rules, $customMessage);

            $admin = new Admin();

            // echo "<pre>"; print_r($admin); die();
            $admin->nom =  $data['nom'];
            $admin->prenoms =  $data['prenoms'];
            $admin->email =  $data['email'];
            $admin->password =  bcrypt($data['password']);
            // $admin->status =  1;

            $admin->save();

            Session::flash('success_message', 'Utilisateur ajouté avec succès !');
            return redirect()->back();
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return view('errors.404', ['error' => $message]);
        }
    }

    //La liste des utilisateurs
    /**
     * Summary of users
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function users()
    {
        try {
            Session::put('page', '/admin/users');
            $users = Admin::get();
            $roles = Role::get();
            return view('admin.auth.users', ['users' => $users, 'roles' => $roles]);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            // return view('errors.404', ['error' => $message]);
        }
    }
    /**
     * Summary of profile
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function profile()
    {
        Session::put('page', '/admin/profile');
        return view('admin.profile');
    }

    /**
     * avatar update
     * Summary of imageProfile
     * @param Request $request
     * @return mixed
     */
    public function imageProfile(Request $request)
    {
        $user = $this->admin::where('id', Auth::guard('admin')->user()->id)->get()->first();
        // dd($user);

        $data = $request->all();


        $rules = [
            'image' => 'mimes:jpeg,png|size:2048',
            // 'password' => 'required',
        ];
        $this->validate($request, $rules);

        if ($request->hasFile('photo')) {

            $image_tmp = $request->file('photo');
            if ($image_tmp->isValid()) {

                //obtenir l'extension de l'image
                $extension = $image_tmp->getClientOriginalExtension();
                //Generer un nouveau nom d'image
                $image = request('photo')->getClientOriginalName();
                $imageTitle = pathinfo($image, PATHINFO_FILENAME);
                $photoName = $imageTitle . '_' . time() . '.' . $extension;
                $photoPathSmall = 'public/images/profile/small/' . $photoName;
                $photoPathLarge = 'public/images/profile/large/' . $photoName;
                //charger l'image
                Image::make($image_tmp)->resize(350, 350)->save($photoPathSmall);
                Image::make($image_tmp)->save($photoPathLarge);


            }
        }
        else{
            $photoName = null;
        }
        $team = Admin::findOrFail($user->id);
        if (isset($photoName)){
            $team->photo = $photoName;
        }
        $team->update();
        return redirect()->back()->with('success', 'Mis à jour avec succès !');
    }
    /**
     * Summary of postProfile
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postProfile(Request $request)
    {
        Session::flash('page', '/admin/profile');
        // dd();
        $user = $this->admin::where('id', Auth::guard('admin')->user()->id)->get()->first();

        $data = $request->all();
        // dd($data);
        $rules = [
            'nom' => 'required',
            'prenoms' => 'required',
            'telephone' => 'required',
            'email' => 'required|email|max:255|unique:admins,email,' . $user->id,
            // 'password' => 'required',
        ];

        $customMessage = [
            'nom.required' => 'Le nom est requis',
            'prenoms.required' => 'Le(s) prénom(s) est/sont requis',
            'telephone.required' => 'Le numéro de téléphone est requis',
            'email.required' => 'Email est requis',
            'email.email' => 'Veuillez saisir une adresse email valide',
            'password.required' => 'Le mot de passe est requis',
        ];
        $this->validate($request, $rules, $customMessage);


        $user->update([
            'nom' => $data['nom'],
            'prenoms' => $data['prenoms'],
            'email' => $data['email'],
            'poste' => $data['poste'],
            'pole' => $data['pole'],
            'telephone' => $data['telephone'],
        ]);

        return redirect()->back()->with('success', 'Profile mis à jour avec succès !');
    }
    /**
     * Summary of changePassword
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function changePassword(Request $request)
    {
        $user = Auth::guard('admin')->user();

        $rules = [
            'password' => 'required',
        ];

        $customMessage = [
            'password.required' => 'Le mot de passe est requis',
        ];
        $this->validate($request, $rules, $customMessage);
        $user->update([
            'password' => bcrypt($request->password)
        ]);

        return redirect()->back()->with('success', 'Mot de passe mis à jour avec succès !');
    }

    // listes des utilisateurs api
    /**
     * Summary of getAllUsers
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\JsonResponse
     */
    public function getAllUsers()
    {
        try {
            $admin = $this->admin::latest()->get();
            $admin->transform(function($admin){
                $admin->role = $admin->getRoleNames()->first();
                $admin->userPermissions = $admin->getPermissionNames();
                return $admin;
            });
            return response()->json([
                'users' => $admin
            ], 200);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return view('errors.404', ['error' => $message]);
        }
    }


    // Axios ajouter un utilisateur

    public function postUser(Request $request)
    {
        // dd($request->all());
        // try {
        $rules = [
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'telephone' => 'required',
            'password' => 'required|alpha_num|min:6',
            'role' => 'required',
            'email' => 'required|email|unique:admins',
        ];

        $customMessages = [
            'nom.required' => 'Veuillez entrer le nom svp',
            'nom.string' => 'Le nom doit contenir uniquement les lettres',
            'prenoms.string' => 'Le(s) prénom(s) doit contenir uniquement les lettres',
            'prenoms.required' => 'Veuillez entrer le(s) prénom(s) svp',
            'telephone.required' => 'Le numéro de téléphone est requis',
            'password.required' => 'Veuillez saisir le mot de passe svp !',
            'password.alpha_num' => 'Le mot de passe doit contenir les caracteres alphanumeriques',
            'password.min' => 'Au moins 6 caractères',
            'role.required' => 'Le role est réquis',
            'email.required' => "L'email est requis",
            "email.email" => 'Veuillez saisir une adresse email valide',
            "email.unique" => "l'adresse existe déjà",
        ];
        $this->validate($request, $rules, $customMessages);
        $user = new Admin();
        $user->nom = $request->nom;
        $user->prenoms = $request->prenoms;
        $user->email = $request->email;
        $user->telephone = $request->telephone;
        $user->role_id = $request->role;
        $user->password = bcrypt($request->password);

        $user->assignRole($request->role);
        if ($request->has('permissions')) {
            $user->givePermissionTo($request->permissions);
        }
        $user->save();

        return response()->json('Utilisateur créé avec succès', 200);
        // } catch (\Exception $e) {
        // $message = $e->getMessage();
        // return view('errors.404', ['error' => $message]);
        // }


    }
    /**
     * Summary of updateUser
     * @param Request $request
     * @param mixed $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateUser(Request $request, $id)
    {
        $rules = [
            'nom' => 'required|string',
            'prenoms' => 'required|string',
            'telephone' => 'required',
            'password' => 'nullable|alpha_num|min:6',
            'role' => 'required',
            'email' => 'required|email|unique:admins,email,'.$id,
        ];

        $customMessages = [
            'nom.required' => 'Veuillez entrer le nom svp',
            'nom.string' => 'Le nom doit contenir uniquement les lettres',
            'prenoms.string' => 'Le(s) prénom(s) doit contenir uniquement les lettres',
            'prenoms.required' => 'Veuillez entrer le(s) prénom(s) svp',
            'telephone.required' => 'Le numéro de téléphone est requis',
            'password.required' => 'Veuillez saisir le mot de passe svp !',
            'password.alpha_num' => 'Le mot de passe doit contenir les caracteres alphanumeriques',
            'password.min' => 'Au moins 6 caractères',
            'role.required' => 'Le role est réquis',
            'email.required' => "L'email est requis",
            "email.email" => 'Veuillez saisir une adresse email valide',
            "email.unique" => "l'adresse existe déjà",
        ];
        $this->validate($request, $rules, $customMessages);

        $admin = Admin::findOrFail($id);
        $admin->nom = $request->nom;
        $admin->prenoms = $request->prenoms;
        $admin->email = $request->email;
        $admin->telephone = $request->telephone;
        $admin->role_id = $request->role;
        if ($request->has('password')) {
            $admin->password = bcrypt($request->password);
        }
        if ($request->has('role')) {
            $adminRole = $admin->getRoleNames();
            foreach ($adminRole as $role) {
                $admin->removeRole($role);
            }
            $admin->assignRole($request->role);
        }

        if ($request->has('permissions')) {
            $adminPermissions = $admin->getPermissionNames();
            foreach ($adminPermissions as $permission) {
                $admin->revokePermissionTo($permission);
            }
            $admin->givePermissionTo($request->permissions);
        }

        $admin->save();

        return response()->json(['Utilisateur modifié avec succès', 200]);
    }
    /**
     * Summary of deleteUser
     * @param mixed $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteUser($id)
    {
        $user = Admin::findOrFail($id);
        $user->delete();
        return response()->json('Supprimé', 200);
    }
    /**
     * Summary of updateUserStatus
     * @param mixed $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateUserStatus($id)
    {
        $user = Admin::find($id);
        if($user->status == 0){

            // dd("inactif");
            $user->status = 1;
            $user->update();
        }elseif ($user->status == 1) {
            // dd("actif");
            $user->status = 0;
            $user->update();
        }
        return response()->json('Status', 200);
    }
}
