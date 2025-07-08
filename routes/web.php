<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ConceptController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\TagController;
use App\Models\Concept;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Arr;


Route::get('/', [ConceptController::class, 'index']);

Route::get('/concepts/create', function(){
    return view('concepts.create');
});



Route::post('/concepts', function(Request $request)   
{
    $attributes = $request -> validate([
    'name' => ['required'],
    'title' => ['required'],
    'tag' => ['nullable'],
    'description' => ['required'],
    ]);
    
    
    Auth::user()->boxuser->concepts()->create(Arr::except($attributes, 'tags'));
    
    // if($attributes['tags']) {
    //     foreach (explode(',', $attributes['tags']) as $tag) {
    //         $concept->tag($tag);
    //     }
    // }

    return redirect('concepts/index');
});

Route::get('/search', SearchController::class);
Route::get('tags/{tag:name}', TagController::class);



Route::get('/register', [RegisteredUserController::class, 'create']);
Route::POST('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::POST('/login', [SessionController::class, 'store']);
Route::POST('/logout', [SessionController::class, 'destroy']);


    


