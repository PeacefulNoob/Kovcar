<?php

namespace App\Http\Controllers;

use App\Car_Model;
use Illuminate\Http\Request;

class CarModelController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function show(Car_Model $car_Model)
    {
        $model = Car_Model::findOrFail($car_Model->id);
        return view('site.car_model',compact('model'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function edit(Car_Model $car_Model)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Car_Model $car_Model)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Car_Model  $car_Model
     * @return \Illuminate\Http\Response
     */
    public function destroy(Car_Model $car_Model)
    {
        //
    }
}
