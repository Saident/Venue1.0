<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            CategorisSeeder::class,
        ]);
        $this->call([
            ProvincesSeeder::class,
        ]);
        $this->call([
            CitiesSeeder::class,
        ]);
        $this->call([
            FacilitiesSeeder::class,
        ]);
        $this->call([
            VenuesSeeder::class,
        ]);
        $this->call([
            FaqSeeder::class,
        ]);
        $this->call([
            ReviewSeeder::class,
        ]);
        
    }
}
