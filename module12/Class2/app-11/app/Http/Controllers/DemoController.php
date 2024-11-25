<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction(Request $request){
      return response("hello")->header('key1','values');  
    }

}
