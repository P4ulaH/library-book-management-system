<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Author;
use App\Models\Genre;

class Book extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'author_id', 'genre_id'];

    public function author(){
        return $this->belongsTo(Author::class)->withDefault([
            'name' => 'Author deleted',
        ]);
    }
    public function genre(){
        return $this->belongsTo(Genre::class)->withDefault([
            'name' => 'Genre deleted',
        ]);
    }
}
