<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function DemoAction(Request $request)
    {
        $name = "token";
        $value = "123xyz";
        $minutes = 120; 
        $path = "/";
        $domain = $_SERVER['SERVER_NAME']; 
        $secure = true;
        $httpOnly = true;
        return response('HELLO WORLD')->cookie($name, $value, $minutes, $path, $domain, $secure, $httpOnly);
    }
}
