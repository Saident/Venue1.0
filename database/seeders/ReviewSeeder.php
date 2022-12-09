<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Review;


class ReviewSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $reviews = [
            [
                'review' => 'Venue ini dapat menampung banyak pengunjung, sangat bagus untuk acara yang mengundang banyak kerabat',
                'id_venue' => 1
            ],
            [
                'review' => 'Venue ini dilengkapi dengan berbagai fasilitas tambahan, harganya juga tidak terlalu mahal',
                'id_venue' => 2
            ],
            [
                'review' => 'Akses jalannya sedikit sulit sehingga perlu menggunakan kendaraan tertentu yang hanya dapat melewatinya',
                'id_venue' => 3
            ],
            [
                'review' => 'Harga dan kualitas pelayanan sangat baik, lain kali akan datang kesini lagi ',
                'id_venue' => 4
            ],
            [
                'review' => 'Meskipun terletak sedikit jauh dari kota, tetapi fasilitas dan tata letak semuanya rapih dan elegan',
                'id_venue' => 5
            ],
            [
                'review' => 'Saya sudah sering kesini, sudah tidak diragukan lagi pemandangannya yang indah',
                'id_venue' => 6
            ],
        ];
        foreach ($reviews as $key => $value) {
            Review::create($value);
        }
    }
}
