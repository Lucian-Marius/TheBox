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
    public function index(Request $request)
    {
            // Fetch the latest concepts with their associated boxuser and tags
            $concepts = Concept::latest()->with(['boxuser', 'tags']);

            if ($request->has('category')) {
                $concepts = $concepts-> where('category', $request->get('category'));
            }

            $concepts = $concepts->latest()->get();
            
            return view('concepts.index', [
                'concepts' => $concepts,
                'tags' => \App\Models\Tag::all(),
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
      public function store(Request $request)
    {
        // Validate the request data
        $attributes = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'title' => ['required'],
            'description' => ['required'],
            'category' => ['nullable', 'string'],
            'tags' => ['nullable', 'string'],
        ]);

        // Ensure the user is authenticated
        $concept = Auth::user()->boxuser->concepts()->create(Arr::except($attributes, 'tags'));

        // If tags are provided, process them
        if (!empty($attributes['tags'])) {
            $tagNames = array_map('trim', explode(',', $attributes['tags']));
            $tagIds = [];
            foreach ($tagNames as $tagName) {
                $tag = \App\Models\Tag::firstOrCreate(['name' => $tagName]);
                $tagIds[] = $tag->id;
            }
            $concept->tags()->sync($tagIds);
        }

        return redirect('/');
    }

    

    /**
     * Display the specified resource.
     */
    public function show(Concept $concept)
    {
        // Fetch the concept with its associated boxuser and tags
        $concept->load(['boxuser', 'tags', 'comments.user']);

        return view('concepts.show', [
            'concept' => $concept,
            'tags' => \App\Models\Tag::all(),
            'title' => $concept->title,
            'description' => $concept->description,
        ]); 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Concept $concept)
    {

        if (Auth::user()->boxuser->id !== $concept->boxuser_id) 
            abort(403, 'You are not authorized to edit this concept.');
        
        return view('concepts.edit', [
            'concept' => $concept,
            'tags' => \App\Models\Tag::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Concept $concept)
    {
         // Add the same authorization check as in edit method
    if (Auth::user()->boxuser->id !== $concept->boxuser_id) {
        abort(403, 'You are not authorized to update this concept.');
    }
    
    // Validate and get the data
    $attributes = $request->validate([
        'title' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
    ]);

    // Update the concept
    $concept->update($attributes);


    return redirect()->route('concepts.show', $concept);     
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Concept $concept)
    {
        // Check if the authenticated user is the owner of the concept
        if (Auth::user()->boxuser->id !== $concept->boxuser_id) {
            abort(403, 'You are not authorized to delete this concept.');
        }

        // Delete the concept
        $concept->delete();

        return redirect('/');       
    }
}
