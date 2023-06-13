<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Login extends Controller
{
    //@return \Illuminate\Http\Response
    public function index()
    {
        //
    }    
    public function create()
    {
        return view("CarStoreHtmlFiles.About");
    }
    public function store(Request $request)
    {
        $login = new Login();
        $login -> name = $request -> name;
        $login -> email = $request -> email;
        $login -> password = $request -> password;
        $car -> save();
         return "You successfully Logined your favorite car!";

    }
}
