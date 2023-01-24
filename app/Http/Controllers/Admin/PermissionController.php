<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use JamesDordoy\LaravelVueDatatable\Http\Resources\DataTableCollectionResource;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(Permission $permission)
     {
         $this->permission = $permission;
         $this->middleware('admin');
     }
    public function index()
    {
        Session::put('page', '/admin/permission');
        $permission = $this->permission::all();
        return view('admin.permission.index', ['permissions' => $permission]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'name' => 'required',
        ]);

        $this->permission->create([
            'name' => $request->name,
        ]);
        return redirect()->route('permission.index')->with('success', 'Permission créée avec succès');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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


    public function getAllPermissions()
    {
        try {
            $permission = $this->permission::all();
            return response()->json([
                'permissions' => $permission
            ], 200);
        } catch (\Exception $e) {
            $message = $e->getMessage();
            return view('errors.404', ['error' => $message]);
        }
        
    }

    public function getPermissions(Request $request)
    {
        // dd($request->all());
        Session::put('page', '/admin/langue/cle');
        $length = $request->input('length');
        // $sortBy = $request->input('column');
        $sortBy = "id";
        $orderByDir = $request->input('dir');
        $searchValue = $request->input('search');

        $query = Permission::eloquentQuery($sortBy, $orderByDir, $searchValue);

        $data = $query->paginate($length);
        
        return new DataTableCollectionResource($data);
    }

    public function addPermission(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $this->permission->create([
            'name' => $request->name,
        ]);

        return response()->json('La permission a été créée avec succès  !', 200);
    }

    public function updatePermission(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);

        $this->permission::find($id)->update([
            'name' => $request->name,
        ]);

        return response()->json('La permission a été modifiée avec succès  !', 200);
    }
}
