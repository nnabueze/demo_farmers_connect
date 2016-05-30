<?php

namespace App\Http\Controllers;

use Auth;
use Hash;
use Illuminate\Http\Request;
use App\User;
use Session;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LoginController extends Controller {

    //
    public function index() {
        if (Auth::check()) {
             return redirect('admin/dashboard');
        }  else {
              $title = 'Login';
        return view('admin.index', compact('title'));
        }
    }

    public function store(Request $Request) {
        if (Auth::attempt(['email' => $Request->email, 'password' => $Request->password])) {
            return redirect()->intended('/admin/dashboard');
        }
    }

 


}
