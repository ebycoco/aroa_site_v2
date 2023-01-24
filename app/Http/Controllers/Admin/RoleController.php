<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(Role $role)
     {
         $this->middleware('admin');
         $this->role = $role;
     }
    public function index()
    {
        Session::put('page', '/admin/role');
        $roles = $this->role::all();
        return view('admin.role.index', ['roles' => $roles]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.role.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:roles',
            'permissions' => 'nullable'
        ]);

        $role = $this->role->create([
            'name' => $request->name,
        ]);

        if($request->has('permissions')){
            $role->givePermissionTo($request->permissions);
        }

        return response()->json('Le rôle a été créé avec success  !', 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.role.create');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // dd($id);
        Session::put('id', $id);
        return view('admin.role.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return view('admin.role.create');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getAllRoles()
    {
        try {
            $role = $this->role::all();
            $role->transform(function($role){
                // $role->role = $role->getRoleNames()->first();
                $role->rolePermissions = $role->getPermissionNames();
                return $role;
            });

            return response()->json([
                'roles' => $role
            ], 200);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return view('errors.404', ['error' => $message]);
        }
    }

    public function editRole(Request $request)
    {
        // dd($request->all());
        return view('admin.role.edit');
    }

    public function getRole($id)
    {
        $role = $this->role::where('id', $id)->get()->first();
        $permissions = $role->permissions;
        // $role = Role::where('id', $id)->get()->first();
        return response()->json([
            'role' => $role,
            'permissions' => $permissions,
        ], 200);
    }

    public function updateRole(Request $request, $id)
    {
        // dd($this->role::find($id));
        $this->validate($request, [
            'name' => 'required|string',
            'permissions' => 'nullable'
        ]);

        $role = $this->role::find($id);
        $role->update([
            'name' => $request->name,
        ]);

        // dd($role);
        if($request->has('permissions')){
            $role->syncPermissions($request->input('permissions'));
        }

        return response()->json('Le rôle a été créé avec success  !', 200);
    }
}
