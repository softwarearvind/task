<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

     protected $fillable = ['title', 'author', 'rating'];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function ratings()
{
    return $this->hasMany(Rating::class);
}
}
