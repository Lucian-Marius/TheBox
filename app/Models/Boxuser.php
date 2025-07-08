<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\hasMany;
use App\Models\User;


class Boxuser extends Model
{
    /** @use HasFactory<\Database\Factories\BoxuserFactory> */
    use HasFactory;

    protected $guarded = [];

    public function user(): BelongsTo
        {
           return $this -> belongsTo(User::class);
        }

    public function concepts(): hasMany
        {
            return $this->hasMany(Concept::class);
        }
}
