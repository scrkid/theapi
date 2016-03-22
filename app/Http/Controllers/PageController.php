<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PageController extends Controller
{
    //
    public function about(){

        $people_arr = [
            'Anand', 'Amit', 'Sandip', 'Alankar'
        ];


        return view('pages.about', compact('people_arr'));
    }
    public function contact(){


        return view('pages.contact');
    }
}
