<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;
use App\Models\Category;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        $books = [
            // HORROR
            [
                'category' => 'Horror',
                'title' => 'Danur',
                'author' => 'Risa Saraswati',
                'year' => 2017,
                'stock' => 10,
            ],
            [
                'category' => 'Horror',
                'title' => 'KKN di Desa Penari',
                'author' => 'SimpleMan',
                'year' => 2019,
                'stock' => 8,
            ],
            [
                'category' => 'Horror',
                'title' => 'The Shining',
                'author' => 'Stephen King',
                'year' => 1977,
                'stock' => 7,
            ],

            // FANTASI
            [
                'category' => 'Fantasi',
                'title' => 'Harry Potter and the Sorcerer’s Stone',
                'author' => 'J.K. Rowling',
                'year' => 1997,
                'stock' => 12,
            ],
            [
                'category' => 'Fantasi',
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'year' => 1937,
                'stock' => 9,
            ],

            // ILMIAH
            [
                'category' => 'Ilmiah',
                'title' => 'A Brief History of Time',
                'author' => 'Stephen Hawking',
                'year' => 1988,
                'stock' => 6,
            ],
            [
                'category' => 'Ilmiah',
                'title' => 'Cosmos',
                'author' => 'Carl Sagan',
                'year' => 1980,
                'stock' => 5,
            ],

            // KOMEDI
            [
                'category' => 'Komedi',
                'title' => 'The Hitchhiker’s Guide to the Galaxy',
                'author' => 'Douglas Adams',
                'year' => 1979,
                'stock' => 7,
            ],
            [
                'category' => 'Komedi',
                'title' => 'Good Omens',
                'author' => 'Terry Pratchett dan Neil Gaiman',
                'year' => 1990,
                'stock' => 4,
            ],

            // ROMANSA
            [
                'category' => 'Romansa',
                'title' => 'Dilan 1990',
                'author' => 'Pidi Baiq',
                'year' => 2014,
                'stock' => 10,
            ],
            [
                'category' => 'Romansa',
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'year' => 1813,
                'stock' => 6,
            ],

            // MISTERI
            [
                'category' => 'Misteri',
                'title' => 'Murder on the Orient Express',
                'author' => 'Agatha Christie',
                'year' => 1934,
                'stock' => 8,
            ],
            [
                'category' => 'Misteri',
                'title' => 'The Da Vinci Code',
                'author' => 'Dan Brown',
                'year' => 2003,
                'stock' => 7,
            ],

            // SEJARAH
            [
                'category' => 'Sejarah',
                'title' => 'Sapiens',
                'author' => 'Yuval Noah Harari',
                'year' => 2011,
                'stock' => 5,
            ],

            // PENDIDIKAN
            [
                'category' => 'Pendidikan',
                'title' => 'Atomic Habits',
                'author' => 'James Clear',
                'year' => 2018,
                'stock' => 9,
            ],

            // TEKNOLOGI
            [
                'category' => 'Teknologi',
                'title' => 'Clean Code',
                'author' => 'Robert C. Martin',
                'year' => 2008,
                'stock' => 6,
            ],
        ];

        foreach ($books as $book) {
            $category = Category::where('name', $book['category'])->firstOrFail();

            Book::updateOrCreate(
                ['title' => $book['title']],
                [
                    'category_id' => $category->id,
                    'author' => $book['author'],
                    'year' => $book['year'],
                    'stock' => $book['stock'],
                ]
            );
        }
    }
}
