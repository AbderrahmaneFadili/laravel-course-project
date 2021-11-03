<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function index()
    {
        //return the view welcome
        $data = [
            'name' =>
            'Fadili Abderrahmane',
            'users' => [
                'jhon',
                'messi',
                'ronaldo',
                'abderrahamne'
            ],
            'countries' => []
        ];
        return view('index', $data);
    }

    public function __invoke()
    {
        return "Invoke function";
    }
}
