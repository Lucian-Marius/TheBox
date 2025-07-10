<?php

namespace App\Http\Controllers;

use App\Models\Comment;

use App\Models\Concept;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request, Concept $concept)
    {
        $attributes = $request->validate([
            'content' => ['required', 'string'],
        ]);

        $concept -> comments() ->create([
            'content' => $attributes['content'],
            'user_id' => Auth::id(),
        ]);

        return redirect()->route('concepts.show', $concept);
    }

    public function destroy(Comment $comment)
    {
        if ($comment ->user_id !== Auth::id()) {
            abort(403);
        }

        $comment -> delete();

        return redirect()->back();
    }
}
