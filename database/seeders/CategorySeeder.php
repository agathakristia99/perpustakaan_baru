<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Horror',
                'description' => 'Buku cerita horor dan menakutkan.',
            ],
            [
                'name' => 'Fantasi',
                'description' => 'Buku tentang dunia imajinasi, sihir, dan petualangan.',
            ],
            [
                'name' => 'Ilmiah',
                'description' => 'Buku ilmu pengetahuan dan penelitian.',
            ],
            [
                'name' => 'Komedi',
                'description' => 'Buku cerita humor dan menghibur.',
            ],
            [
                'name' => 'Romansa',
                'description' => 'Buku cerita percintaan dan hubungan.',
            ],
            [
                'name' => 'Misteri',
                'description' => 'Buku tentang teka-teki dan penyelidikan.',
            ],
            [
                'name' => 'Sejarah',
                'description' => 'Buku mengenai peristiwa dan tokoh sejarah.',
            ],
            [
                'name' => 'Pendidikan',
                'description' => 'Buku pembelajaran dan pengetahuan akademik.',
            ],
            [
                'name' => 'Teknologi',
                'description' => 'Buku tentang teknologi dan perkembangan digital.',
            ],
        ];

        foreach ($categories as $category) {
            Category::firstOrCreate(
                ['name' => $category['name']],
                ['description' => $category['description']]
            );
        }
    }
}
