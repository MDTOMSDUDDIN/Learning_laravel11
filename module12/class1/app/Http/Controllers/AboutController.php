<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    function about()
    {
        return response("This is About Page .");
    }

    function aboutMe(){
        return response("Hi , i am tomas uddin leaner ostad batch 5");
    }
}
