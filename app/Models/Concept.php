<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Concept extends Model
{
    /** @use HasFactory<\Database\Factories\ConceptFactory> */
    use HasFactory;

    // Specify which fields are mass assignable
    protected $fillable = ['name', 'title', 'description', 'boxuser_id', 'category'];


    public function tag(string $name): void
    {
        $tag = Tag::firstOrCreate(['name' => $name]);

        $this->tags()->attach($tag);
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(Tag::class);
    }

    public function boxuser(): BelongsTo
    {
        return $this->belongsTo(Boxuser::class);
    }

    public function comments(): HasMany
    {
        return $this -> hasMany(Comment::class);
    }

    public function getCategory() 
    {
        $categoryButtons = [
            'Technology' => 'resources/images/tech-gear.png',
            'Creative' => 'resources/images/art-gear-2.png',
            'Business' => 'resources/images/buss-gear.png',
            'Science' => 'resources/images/nature-gear.png',
            'Other' => 'resources/images/other-gear.png'
        ];

        return $categoryButtons[$this->category];
    }
}









