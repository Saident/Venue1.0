<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
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
                'name' => 'GWK Festival Park',
                'vendor'=> 'Garuda Wisnu Kencana Culture Park',
                'id_category' => 6,
                'address' => 'Jalan Raya Uluwatu, Desa Ungasan, Kuta Selatan',
                'id_city' => 4,
                'description' => 'GWK Festival Park merupakan sebuah taman yang dapat digunakan untuk menggelar berbagai kegiatan di luar ruangan.',
                'policy' => 'Dilarang membawa binatang',
                'picture' => null,
                'price' => 150000000
            ],
            [
                'name' => 'Main Hall',
                'vendor'=> 'Sentul International Convention Center',
                'id_category' => 1,
                'address' => 'Jl. Jend. Sudirman, Cipambuan, Kec. Babakan Madang',
                'id_city' => 2,
                'description' => 'Sentul International Convention Center merupakan sebuah hallroom dapat digunakan untuk menggelar berbagai kegiatan.',
                'policy' => 'Dilarang membawa binatang',
                'picture' => null,
                'price' => 200000000
            ],
            [
                'name' => 'Pantai Saleo',
                'vendor'=> 'Pantai Saleo',
                'id_category' => 5,
                'address' => 'Jalanl Yan Mamoribo, Waisai, Distrik Kota Waisai',
                'id_city' => 5,
                'description' => 'Pantai Saleo merupakan sebuah pantai yang memiliki kenampakan yang indah dan dapat digunakan untuk menggelar berbagai kegiatan di luar ruangan.',
                'policy' => 'Dilarang membawa binatang',
                'picture' => null,
                'price' => 10000000
            ],
            [
                'name' => 'Pine Forest Camp',
                'vendor'=> 'Pine Forest',
                'id_category' => 4,
                'address' => 'Suntenjaya, Kec. Lembang',
                'id_city' => 1,
                'description' => 'Pine Forest Camp merupakan sebuah hutan yang memiliki kenampakan yang indah dan dapat digunakan untuk menggelar berbagai kegiatan di luar ruangan.',
                'policy' => 'Dilarang membawa binatang',
                'picture' => null,
                'price' => 8000000
            ],
            [
                'name' => 'The Apurva Kempinski',
                'vendor'=> 'The Apurva Kempinski',
                'id_category' => 4,
                'address' => 'Jalan raya nusa dua selatan',
                'id_city' => 4,
                'description' => 'The Apurva Kempinski Bali merupakan sebuah hallroom dapat digunakan untuk menggelar berbagai kegiatan.',
                'policy' => 'Dilarang membawa binatang',
                'picture' => null,
                'price' => 100000000
            ],
            [
                'name' => 'The Opus Grand Ballroom',
                'vendor'=> 'The Tri Brata Dharmawangsa',
                'id_category' => 3,
                'address' => 'Jl. Darmawangsa III No.2, RT.2/RW.1, Pulo, Kec. Kby. Baru',
                'id_city' => 3,
                'description' => 'The Opus Grand Ballroom merupakan sebuah hallroom yang berada di dalam gedung The Tribrata Dharmawangsa yang dapat digunakan untuk menggelar berbagai kegiatan.',
                'policy' => 'Dilarang membawa binatang',
                'picture' => null,
                'price' => 125000000
            ]
        ];
    }
}
