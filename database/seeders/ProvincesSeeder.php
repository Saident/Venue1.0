<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvincesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $provinces = [
            [
                'provinces' => 'DKI Jakarta'
            ],
            [
                'provinces' => 'Jawa Barat'
            ],
            [
                'provinces' => 'Bali'
            ],
            [
                'provinces' => 'Papua Barat Daya'
            ]
        ];
    }
}
