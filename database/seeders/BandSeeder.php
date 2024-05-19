<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        $band = \App\Models\Band::create([
            'name' => 'Artcell',
            'genre' => 'Progressive Metal',
            'country' => 'Bangladesh',
            'founding_year' => '1981',
            'description' => 'A heavy metal band.'
        ]);
        $band->albums()->createMany([
            ['title' => 'Oniket Prantor', 'release_date' => '2001-01-01'],
            ['title' => 'Onno Shomoy', 'release_date' => '2002-01-01'],
            ['title' => 'Aniket Prantor', 'release_date' => '2006-01-01'],
            ['title' => 'Hussein', 'release_date' => '2012-01-01'],
        ]);
    }
}
