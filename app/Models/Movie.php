<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'rating', 'description', 'dojo_id']; //prevent mass assignment issues  - upating multiple field at once
    /** @use HasFactory<\Database\Factories\MoviesFactory> */
    use HasFactory;

    public function dojo() {
        return $this->belongsTo(Dojo::class);
    }

    //$movie->dojo->name
}
