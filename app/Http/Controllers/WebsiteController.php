<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    public function index()
    {
        $manufs=Manufacturer::all();
        return view('site.index2', compact('manufs'));

    }

}
