<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Concept;

class SearchController extends Controller
{
    public function __invoke(Request $request) 
    {
        $query = $request->get('q');

            
        $concepts = Concept::where('title', 'like', '%' . $query . '%')
                      ->orWhere('description', 'like', '%' . $query . '%')
                      ->orWhere('name', 'like', '%' . $query . '%')
                      ->orWhere('category', 'like', '%' . $query . '%')
                      ->get();
        return view('results', ['concepts'=> $concepts]);
    }

}

