<?php

use App\Models\Cosmetic;
use Faker\Generator as Faker;
use Illuminate\Database\Seeder;

class CosmeticTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $ingredients = [
            'canaledanielina',
            'citoplosadina',
            'genovesenina',
            'pallozzolina',
            'taurina',
            'latte',
            'siero del latte',
            'coda alla vaccinara',
            'citoplasma attivo',
            'spennatamente lucocina',
            'cafassina marcovincenzina',
            'panicina francescana',
            'incertezzina saffiottosa',
            'longobardina',
            'calarota eccipollina',
        ];

        for ($i=0; $i < 30; $i++) {
            $newCosmetic = new Cosmetic();

            $newCosmetic->name= $faker->unique()->name();
            $newCosmetic->ingredients= implode(', ', $faker->randomElements($ingredients, 5));
            $newCosmetic->price= $faker->randomFloat(2, 20, 30);
            $newCosmetic->image_url= $faker->imageUrl();

            $newCosmetic->save();
        }

    }
}
