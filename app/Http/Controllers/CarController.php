<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("CarStoreHtmlFiles.buycar");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $car = new Car();
        $car -> name = $request -> name;
        $car -> model = $request -> model;
        $car -> carname = $request -> carname;
        $car -> price = $request -> price;
        $car -> email = $request -> email;
        $car -> comment = $request -> text;

        $car -> save();
     
        //  $name = $request->input('name');
        //  $model = $request->input('model');
        //  $carname = $request->input('carname');
        //  $price = $request->input('price');
        //  $email = $request->input('email');
        //  $text = $request->input('text');
        //  $row =car::insert([
        //     "name"=>$name,
        //     "model"=>$model,
        //     "carname"=>$carname,
        //     "price"=>$price,
        //     "email"=>$email,
        //     "comment"=>$text,
        //  ]);
         return "You successfully perchazed your favorite car!";

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
}
