<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('weapons')->insert([
            'map_id' => 1,
            'name' => 'Candlestick',
            'image_path' => 'https://cdn.pixabay.com/photo/2018/06/17/14/24/candlestick-3480591_1280.png',
        ]);

        DB::table('weapons')->insert([
            'map_id' => 1,
            'name' => 'Dagger',
            'image_path' => 'https://cdn.pixabay.com/photo/2019/10/25/20/59/dagger-4578137_1280.png',
        ]); 

        DB::table('weapons')->insert([
            'map_id' => 1,
            'name' => 'Lead Pipe',
            'image_path' => 'https://cdn.pixabay.com/photo/2017/10/09/16/00/tube-2833859_1280.png',
        ]);

        DB::table('weapons')->insert([
            'map_id' => 1,
            'name' => 'Revolver',
            'image_path' => 'https://upload.wikimedia.org/wikipedia/commons/6/6f/Revolver_edit.png',
        ]);

        DB::table('weapons')->insert([
            'map_id' => 1,
            'name' => 'Rope',
            'image_path' => 'https://upload.wikimedia.org/wikipedia/commons/2/26/Savoy_knot.png',
        ]);

        DB::table('weapons')->insert([
            'map_id' => 1,
            'name' => 'Wrench',
            'image_path' => 'https://upload.wikimedia.org/wikipedia/commons/c/cc/Universala_renchilo.png',
        ]);
    }
}
