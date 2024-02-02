<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recipe;

class RecipesController extends Controller
{
    public function about(){
        return view('about');
    }

    // public function home(){
    //     return view('recipe');

    // }

    public function contact(){
        return view('contact');
    }

    public function posts(){
        return view('posts');
    }



        public function createPost(Request $request){
            $incomingFields = $request->validate([
                'title' => 'required',
                'Desc' => 'required'
            ]);
            
            $incomingFields['title'] = strip_tags($incomingFields['title']);
            $incomingFields['Desc'] = strip_tags($incomingFields['Desc']);
            
            Recipe::create($incomingFields);
            return redirect('/home');
        }


        public function recipe(){

            $recipes = Recipe::all();

            return view('recipe', ['recipes' => $recipes]);
        }
        



    }




