<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concept;

class SearchController extends Controller
{
    public function __invoke() 
    {
        $concepts = Concept::where('title', 'like', request('q'))->get();
      
        return view('results', ['concepts'=> $concepts]);
    }

}

