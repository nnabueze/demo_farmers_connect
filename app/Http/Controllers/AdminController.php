<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Register;
use App\User;
use App\Models\Ercas;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller {

    //


    public function index() {
        if (Auth::check()) {
            $users = Register::all();
            $ercaspay = Ercas::all();
            $title = 'Dashboard';
            return view('admin.dashboard', compact('title','users','ercaspay'));
        } else {

            return redirect('/admin');
        }
    }
    public function show($id){
       $user = Register::findOrFail($id);
       $title = 'User Details';
       return view('admin.show',compact('title','user'));
    }
    public function listUsers(){
        if (Auth::check()) {
            $users = Register::all();
            $title = 'List Users';
            return view('admin.list', compact('title','users'));
        }  else {
            return redirect('/admin');
        }
    }

    public function logout() {
        if (Auth::check()) {
            Auth::logout();
            return redirect('/admin');
        } else {

            return redirect('/admin');
        }
    }

}
