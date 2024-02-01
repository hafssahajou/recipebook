<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecipesController extends Controller
{
    public function about(){
        return view('about');
    }

    public function home(){
        return view('recipe');

    }
    
    public function contact(){
        return view('contact');
    }
    
}

