<?php

namespace Database\Seeders;

use App\Models\Vrsta;
use Illuminate\Database\Seeder;

class VrstaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Vrsta::create([
            'vrsta' => 'Krofna'
        ]);

        Vrsta::create([
            'vrsta' => 'Torta'
        ]);
        
        Vrsta::create([
            'vrsta' => 'Mafin'
        ]);

        Vrsta::create([
            'vrsta' => 'Kolac'
        ]);

        Vrsta::create([
            'vrsta' => 'Tart'
        ]);
    }
}
