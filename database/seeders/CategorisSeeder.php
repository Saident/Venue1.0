<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'category' => 'Auditorium'
            ],
            [
                'category' => 'Café'
            ],
            [
                'category' => 'Hallroom'
            ],
            [
                'category' => 'Hutan'
            ],
            [
                'category' => 'Pantai'
            ],
            [
                'category' => 'Taman'
            ]
        ];
        foreach ($categories as $key => $value) {
            Category::create($value);
        }
    }
}
