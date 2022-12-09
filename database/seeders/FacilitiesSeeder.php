<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
                'facilitty' => 'Audio Sound System'
            ],
            [
                'facilitty' => 'Halaman Parkir'
            ],
            [
                'facilitty' => 'Infrastruktur Distabilitas'
            ],
            [
                'facilitty' => 'Kebersihan'
            ],
            [
                'facilitty' => 'Keamanan'
            ],
            [
                'facilitty' => 'Kursi'
            ],
            [
                'facilitty' => 'LCD Proyektor'
            ],
            [
                'facilitty' => 'Meja'
            ],
            [
                'facilitty' => 'Mushola'
            ],
            [
                'facilitty' => 'Panggung'
            ],
            [
                'facilitty' => 'Ruangan pendukung'
            ],
            [
                'facilitty' => 'Restoran'
            ],
            [
                'facilitty' => 'Toilet'
            ],
            [
                'facilitty' => 'Wifi'
            ]
        ];
    }
}
