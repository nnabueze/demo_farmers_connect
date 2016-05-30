<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use App\Role;
use Illuminate\Http\Request;
use App\User;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class UserController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index() {
        //
    }

    /*
     * Show the form for creating a new resource.
     *
     * @return Response
     */

    public function create() {
        //
        if (Auth::Check() && Auth::user()->role == 'admin') {
            $title = 'Admin';
            return view('admin.create', compact('title'));
        } elseif (Auth::Check()) {
            return redirect('admin/dashboard');
        } else {
            return redirect('admin');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request) {
        if (Auth::Check() && Auth::user()->role == 'admin') {
            $email = User::where('email', $request->email)->first();
            if ($email) {
                session::flash('message', 'Email has already been used');
                return redirect('/user/create');
            }
            if ($request->role == 'admin') {

                $role = Role::where('name', 'admin')->first();
            } else {

                $role = Role::where('name', 'user')->first();
            }
            $request['key'] = $string = str_random(25);
            $request['password'] = Hash::make($request['password']);
            $register = User::create($request->all());                 //insert a user into the database
            $register->roles()->attach($role->id);          //Assign a user to a role
            Session::flash('message', 'You have sucessfully created an account. Please login to continue');
            //Login the user and redirect to the billing paage
            return redirect('/user/create');
        } elseif (Auth::Check()) {
            return redirect('admin/dashboard');
        } else {
            return redirect('admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id) {
        //
        $user = User::findOrfail($id);
        print_r($user);
        die;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id) {
        //
    }

}
