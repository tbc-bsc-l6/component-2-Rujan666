<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ShowController extends Controller
{
    public function show_auth_user(){
        return Auth::user();
    }

    public function check_auth_user(){
        if(Auth::check()){
            return view('dashboard');
        }
        return 'you arenot athenticated';
    }
}
