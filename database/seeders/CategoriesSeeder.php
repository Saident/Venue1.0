<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
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
    }
}
