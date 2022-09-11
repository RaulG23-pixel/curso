<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {

        $data = [
            0 => array(
                'nombre' => 'Raul',
                'email' => 'raulx12@gmail.com',
                'id' => 1
            ),
            1 => array(
                'nombre' => 'Alex',
                'email' => 'alex@gmail.com',
                'id' => 2
            ),
            2 => array(
                'nombre' => 'Carmen',
                'email' => 'carmen@gmail.com',
                'id' => 3
            )
        ];
        return view('about', compact('data'));
    }
}
