<?php

namespace App\Http\Controllers;

use Illuminate\Support\Arr;
use App\Models\Boxuser;
use App\Models\User;
use App\Models\Concept;
use App\Http\Requests\StoreConceptRequest;
use App\Http\Requests\UpdateConceptRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ConceptController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view("concepts.index", [
        'concepts' => \App\Models\Concept::all(),
        'tags' => \App\Models\Tag::all()
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function concepts()
    {
        return view("concepts.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    
    //  public function store(Request $request)
    // {
        // $attributes = $request->validate([
        //     'Author' => ['required'],
        //     'title' => ['required'],
        //     'description' => ['required'],
        //     'tags' => ['nullable'],
        // ]);


        // $concept = Auth::user()->boxuser->concepts()->create(Arr::except($attributes, 'tags'));
            
        //     if($attributes['tags'] ?? false) {
        //         foreach (explode(',', $attributes['tags']) as $tag) {
        //             $concept->tag($tag);
        //         }
        //     }
            
        //      return redirect('concepts.index');
        // }

    

    /**
     * Display the specified resource.
     */
    public function show(Concept $concept)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concept $concept)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateConceptRequest $request, Concept $concept)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concept $concept)
    {
        //
    }
}
