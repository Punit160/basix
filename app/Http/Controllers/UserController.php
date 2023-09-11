<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('user.add-user');
    }

    public function view_user(Request $request){
        $data['user'] = DB::table('users')->get();
        return view('user.view-user', $data); 
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
            $validator = $request->validate([
            'name' => 'required|min:5|max:50|unique:users',
            'email' => 'required|email|unique:users', 
            'password' => 'required|confirmed|min:6',
        ]);
           $user = new User();
           $user->name = $request->name;
           $user->email = $request->email;
           $user->mobile = $request->mobile;
           $user->password = $request->password;
           $user->role = $request->role;
           $user->type = $request->user_type;
           $user->maker = $request->maker;
           $user->checker  = $request->checker ;
           $user->approver  = $request->approver ;
           $user->created_by = $request->created_by;
           $user->save();
           return back()->with('status', 'User Added Successfully');
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
