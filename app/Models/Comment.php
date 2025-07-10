<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable =['content', 'user_id', 'concept_id'];

    public function concept() :BelongsTo
    {
        return $this -> belongsTo(Concept::class);
    }

    public function user() :BelongsTo
    {
        return $this -> belongsTo(User::class); 
    }
}
