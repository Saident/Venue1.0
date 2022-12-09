<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Faq;


class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faqs = [
            [
                'question' => 'Apakah tersedia makanan gratis?',
                'answer'=> 'Pengunjung dapat membeli makanan pada food court yang tersedia di dalam venue',
                'id_venue' => 1
            ],
            [
                'question' => 'Apakah saya dapat melakukan refund?',
                'answer'=> 'Pengajuan refund paling lambat dilakukan maksimal 3 hari sebelum venue dipakai',
                'id_venue' => 2
            ],
            [
                'question' => 'Apakah dilarang membawa hewan peliharaan?',
                'answer'=> 'Hewan yang dapat dibawa hanya kucing peliharaan',
                'id_venue' => 3
            ],
            [
                'question' => 'Apakah anak-anak di bawah umur dikenakan biaya masuk?',
                'answer'=> 'Anak-anak umur di atas 5 tahun terhitung tiket masuk',
                'id_venue' => 4
            ],
            [
                'question' => 'Apakah diperbolehkan membawa aksesoris venue pribadi?',
                'answer'=> 'Diperbolehkan membawa aksesoris pribadi namun jika terdapat kerusakan dan kehilangan pihak venue tidak bertanggung jawab',
                'id_venue' => 5
            ],
            [
                'question' => 'Apakah transportasi menuju venue dapat dilewati mobil pribadi?',
                'answer'=> 'Transportasi hanya dapat dilalui dengan sepeda motor',
                'id_venue' => 6
            ],
        ];
        foreach ($faqs as $key => $value) {
            Faq::create($value);
        }
    }
}
