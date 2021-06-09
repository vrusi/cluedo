<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([
            'map_id' => 1,
            'label' => '1',
            'name' => 'Kitchen',
        ]);

        DB::table('rooms')->insert([
            'map_id' => 1,
            'label' => '2',
            'name' => 'Ballroom',
        ]);

        DB::table('rooms')->insert([
            'map_id' => 1,
            'label' => '3',
            'name' => 'Conservatory',
        ]);

        DB::table('rooms')->insert([
            'map_id' => 1,
            'label' => '4',
            'name' => 'Dining Room',
        ]);

        DB::table('rooms')->insert([
            'map_id' => 1,
            'label' => '5',
            'name' => 'Billiard Room',
        ]);

        DB::table('rooms')->insert([
            'map_id' => 1,
            'label' => '6',
            'name' => 'Library',
        ]);

        DB::table('rooms')->insert([
            'map_id' => 1,
            'label' => '7',
            'name' => 'Lounge',
        ]);

        DB::table('rooms')->insert([
            'map_id' => 1,
            'label' => '8',
            'name' => 'Hall',
        ]);

        DB::table('rooms')->insert([
            'map_id' => 1,
            'label' => '9',
            'name' => 'Study',
        ]);

        // define passages
        DB::statement('UPDATE rooms SET passage_id=9 WHERE id=1');
        DB::statement('UPDATE rooms SET passage_id=7 WHERE id=3');
        DB::statement('UPDATE rooms SET passage_id=1 WHERE id=9');
        DB::statement('UPDATE rooms SET passage_id=3 WHERE id=7');

    }
}
