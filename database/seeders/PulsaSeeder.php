<?php

namespace Database\Seeders;

use App\Models\Pulsa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PulsaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        echo "Seeding Pulsa\n";
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            Pulsa::create([
                'provider' => $faker->sentence,
                'nominal' => $faker->name,
                'no_hp' => $faker->sentence,
            ]);
        }
    }
}
