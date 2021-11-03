<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        //return the view welcome
        return view('welcome');
    }

    public function __invoke()
    {
        return "Invoke function";
    }
}
