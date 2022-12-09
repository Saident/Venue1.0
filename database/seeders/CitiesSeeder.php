<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesSeeder extends Seeder
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
                'city' => 'Kota Administrasi Jakarta Selatan',
                'id_province' => 1
            ],
            [
                'city' => 'Kabupaten Bandung Barat',
                'id_province' => 2
            ],
            [
                'city' => 'Kabupaten Bogor',
                'id_province' => 2
            ],
            [
                'city' => 'Kabupaten Badung',
                'id_province' => 3
            ],
            [
                'city' => 'Kabupaten Raja Ampat',
                'id_province' => 4
            ]

            ];
            foreach ($cities as $key => $value) {
                City::create($value);
            }
    }
}
