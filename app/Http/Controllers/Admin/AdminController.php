<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ResetsPasswords;

class AdminController extends Controller
{
    /*
    
     * Login the user into data base
     
    */
    public function __construct()
    {
        //do nothing
    }
    
    public function login() {
        return view('admin.login');
    }
}
