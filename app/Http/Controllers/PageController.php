<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function show(){
        $boy = "good boy";
        return view('hello',compact('boy'));
    }
//git add .
//git commit -m "adding auth"
//git push
    public function index(){
        return view('pages.index');
    }

    public function about(){
        return view('pages.about');
    }
    public function services(){
        $data = [
            'titre' => 'the following services are providing',
            'services' => [
                'programing', 'automation', 'web disign'
            ]

        ];
        return view('pages.services')->with($data);
    }
}
