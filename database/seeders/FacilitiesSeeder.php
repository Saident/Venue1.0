<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Facility;


class FacilitiesSeeder extends Seeder
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
                'facility' => 'Audio Sound System'
            ],
            [
                'facility' => 'Halaman Parkir'
            ],
            [
                'facility' => 'Infrastruktur Distabilitas'
            ],
            [
                'facility' => 'Kebersihan'
            ],
            [
                'facility' => 'Keamanan'
            ],
            [
                'facility' => 'Kursi'
            ],
            [
                'facility' => 'LCD Proyektor'
            ],
            [
                'facility' => 'Meja'
            ],
            [
                'facility' => 'Mushola'
            ],
            [
                'facility' => 'Panggung'
            ],
            [
                'facility' => 'Ruangan pendukung'
            ],
            [
                'facility' => 'Restoran'
            ],
            [
                'facility' => 'Toilet'
            ],
            [
                'facility' => 'Wifi'
            ]
        ];
        foreach ($cities as $key => $value) {
            Facility::create($value);
        }
    }
}
