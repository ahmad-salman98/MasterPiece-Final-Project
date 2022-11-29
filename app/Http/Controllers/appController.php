<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show main page
        return view('app.index');
    }

    public function checkout()
    {
        return view('app.checkout');
    }

    public function about()
    {
        return view('app.about');
    }
}
