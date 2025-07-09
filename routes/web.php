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

Route::get('/concepts/create', [ConceptController::class, 'concepts']);
Route::post('/concepts', [ConceptController::class, 'store']);
Route::get('/concepts/{concept}', [ConceptController::class, 'show'])->name('concepts.show');
Route::get('/concepts', [ConceptController::class, 'destroy']);

Route::get('/search', SearchController::class);
Route::get('tags/{tag:name}', TagController::class);



Route::get('/register', [RegisteredUserController::class, 'create']);
Route::POST('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::POST('/login', [SessionController::class, 'store']);
Route::POST('/logout', [SessionController::class, 'destroy']);


    


