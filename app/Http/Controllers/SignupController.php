<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Signup;


class SignupController extends Controller
{
    //
    public function create()
    {
        return view("CarStoreHtmlFiles.form1");
    }
    
    public function store(Request $request)
    {
        $signup = new Signup();
        $signup -> name = $request -> name;
        $signup -> last_name = $request -> last_name;
        $signup -> email = $request -> email;
        $signup -> password = $request -> password;
        $signup -> Confirm_password = $request -> Confirm_password;
        $signup -> gender = $request -> gender;
        $signup -> gender = $request -> gender;
        $signup -> remember = $request -> remember;

        $car -> save();
     
         return "You successfully Registered to CarStore site";

    }
}
