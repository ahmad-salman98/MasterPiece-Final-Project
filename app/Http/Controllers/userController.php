<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    // return profile page
    function Profile()
    {
        return view('user.profile');
    }
}
