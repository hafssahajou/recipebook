<?php
use App\Models\Recipe;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/recipe' , function(){
//     $recipes = Recipe::all();
//     return view('recipe' , ['recipes' => $recipes]);
// });

Route::get('/posts' , function(){
    return view('posts');
});

Route::get('/', [RecipesController::class,'home'])->name('homepage');

Route::get('/about', [RecipesController::class,'about'] );



Route::get('/contact', [RecipesController::class,'contact']);

Route::post('/create_post', [RecipesController::class, 'createPost']);

Route::get('/', [RecipesController::class, 'recipe']);



