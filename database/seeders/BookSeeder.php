<?php

namespace Database\Seeders;


use App\Models\Genre;
use App\Models\Author;
use App\Models\Book;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $authors = Author::all();
        $genres = Genre::all();

        //create 50 books, assign a random existing author & genre to each
        Book::factory()->count(50)->make()->each(function ($book) use ($authors, $genres) {
            $book->author_id = $authors->random()->id;
            $book->genre_id = $genres->random()->id;
            $book->save();
        });
    }
}
