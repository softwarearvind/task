<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'rating' => 4.5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'rating' => 4.8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'rating' => 4.7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Moby Dick',
                'author' => 'Herman Melville',
                'rating' => 4.0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],

             [
                'title' => 'War',
                'author' => 'Leo',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'java',
                'author' => 'test',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'php',
                'author' => 'demo test',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'testing',
                'author' => 'Leo Tolstoy',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
             [
                'title' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'rating' => 4.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
