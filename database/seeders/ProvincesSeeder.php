<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Province;


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
                'province' => 'DKI Jakarta'
            ],
            [
                'province' => 'Jawa Barat'
            ],
            [
                'province' => 'Bali'
            ],
            [
                'province' => 'Papua Barat Daya'
            ]
        ];
        foreach ($provinces as $key => $value) {
            Province::create($value);
        }
    }
}
