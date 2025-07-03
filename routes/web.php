<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome', [
        'concepts' => \App\Models\Concept::all(),
        'tags' => \App\Models\Tag::all()
    ]);
});


