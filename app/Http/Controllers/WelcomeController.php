<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\House;

class WelcomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses = House::all();

        return view('welcome', compact('houses'));

    }

    public function welcomedetail()
    {
        $houses = House::all();

        return view('welcomedetail', compact('houses'));

    }

        /**
     * Show the application APPARTMENT.
     *
     * @return \Illuminate\Http\Response
     */
    public function appartments() 
    {
        $houses = House::all();

        return view('appartments', compact('houses'));

    }

    public function immeubles()
    {
        $houses = House::all();

        return view('immeubles', compact('houses'));

    }

    public function maisons()
    {
        $houses = House::all();

        return view('maisons', compact('houses'));

    }

    public function terrains()
    {
        $houses = House::all();

        return view('terrains', compact('houses'));

    }

}
