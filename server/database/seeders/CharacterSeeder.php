<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('characters')->insert([
            'map_id' => 1,
            'label' => 'A',
            'name' => 'Miss Scarlett',
            'colour' => '#BC0000',
        ]);

        DB::table('characters')->insert([
            'map_id' => 1,
            'label' => 'B',
            'name' => 'Reverend Green',
            'colour' => '#008000',
        ]);

        DB::table('characters')->insert([
            'map_id' => 1,
            'label' => 'C',
            'name' => 'Colonel Mustard',
            'colour' => '#EAAA00',
        ]);

        DB::table('characters')->insert([
            'map_id' => 1,
            'label' => 'D',
            'name' => 'Professor Plum',
            'colour' => '#9C50B6',
        ]);

        DB::table('characters')->insert([
            'map_id' => 1,
            'label' => 'E',
            'name' => 'Mrs Peacock',
            'colour' => '#104A65',
        ]);

        DB::table('characters')->insert([
            'map_id' => 1,
            'label' => 'F',
            'name' => 'Mrs White',
            'colour' => '#F2F2F2',
        ]);
    }
}
