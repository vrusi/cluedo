<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maps')->insert([
            'name' => 'Tudor Mansion',
            'board' => json_encode([
                ['-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', 'F', '-1', '-1', '-1', '-1', 'B', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1', '-1'],
                ['1', '1', '1', '1', '1', '1', '-1', '0', '0', '0', '2', '2', '2', '2', '0', '0', '0', '-1', '3', '3', '3', '3', '3', '3'],
                ['1', '1', '1', '1', '1', '1', '0', '0', '2', '2', '2', '2', '2', '2', '2', '2', '0', '0', '3', '3', '3', '3', '3', '3'],
                ['1', '1', '1', '1', '1', '1', '0', '0', '2', '2', '2', '2', '2', '2', '2', '2', '0', '0', '3', '3', '3', '3', '3', '3'],
                ['1', '1', '1', '1', '1', '1', '0', '0', '2', '2', '2', '2', '2', '2', '2', '2', '0', '0', '3', '3', '3', '3', '3', '3'],
                ['1', '1', '1', '1', '1', '1', '0', '0', '2', '2', '2', '2', '2', '2', '2', '2', '0', '0', '0', '3', '3', '3', '3', '-1'],
                ['-1', '1', '1', '1', '1', '1', '0', '0', '2', '2', '2', '2', '2', '2', '2', '2', '0', '0', '0', '0', '0', '0', '0', 'E'],
                ['0', '0', '0', '0', '0', '0', '0', '0', '2', '2', '2', '2', '2', '2', '2', '2', '0', '0', '0', '0', '0', '0', '0', '-1'],
                ['-1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '5', '5', '5', '5', '5', '5'],
                ['4', '4', '4', '4', '4', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '5', '5', '5', '5', '5', '5'],
                ['4', '4', '4', '4', '4', '4', '4', '4', '0', '0', '-1', '-1', '-1', '-1', '-1', '0', '0', '0', '5', '5', '5', '5', '5', '5'],
                ['4', '4', '4', '4', '4', '4', '4', '4', '0', '0', '-1', '-1', '-1', '-1', '-1', '0', '0', '0', '5', '5', '5', '5', '5', '5'],
                ['4', '4', '4', '4', '4', '4', '4', '4', '0', '0', '-1', '-1', '-1', '-1', '-1', '0', '0', '0', '5', '5', '5', '5', '5', '5'],
                ['4', '4', '4', '4', '4', '4', '4', '4', '0', '0', '-1', '-1', '-1', '-1', '-1', '0', '0', '0', '0', '0', '0', '0', '0', '-1'],
                ['4', '4', '4', '4', '4', '4', '4', '4', '0', '0', '-1', '-1', '-1', '-1', '-1', '0', '0', '0', '6', '6', '6', '6', '6', '-1'],
                ['4', '4', '4', '4', '4', '4', '4', '4', '0', '0', '-1', '-1', '-1', '-1', '-1', '0', '0', '6', '6', '6', '6', '6', '6', '6'],
                ['-1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '-1', '-1', '-1', '-1', '-1', '0', '0', '6', '6', '6', '6', '6', '6', '6'],
                ['C', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '6', '6', '6', '6', '6', '6', '6'],
                ['-1', '0', '0', '0', '0', '0', '0', '0', '0', '8', '8', '8', '8', '8', '8', '0', '0', '0', '6', '6', '6', '6', '6', '-1'],
                ['7', '7', '7', '7', '7', '7', '7', '0', '0', '8', '8', '8', '8', '8', '8', '0', '0', '0', '0', '0', '0', '0', '0', 'D'],
                ['7', '7', '7', '7', '7', '7', '7', '0', '0', '8', '8', '8', '8', '8', '8', '0', '0', '0', '0', '0', '0', '0', '0', '-1'],
                ['7', '7', '7', '7', '7', '7', '7', '0', '0', '8', '8', '8', '8', '8', '8', '0', '0', '9', '9', '9', '9', '9', '9', '9'],
                ['7', '7', '7', '7', '7', '7', '7', '0', '0', '8', '8', '8', '8', '8', '8', '0', '0', '9', '9', '9', '9', '9', '9', '9'],
                ['7', '7', '7', '7', '7', '7', '7', '0', '0', '8', '8', '8', '8', '8', '8', '0', '0', '9', '9', '9', '9', '9', '9', '9'],
                ['7', '7', '7', '7', '7', '7', '-1', 'A', '-1', '8', '8', '8', '8', '8', '8', '-1', '0', '-1', '9', '9', '9', '9', '9', '9'],
            ]),
        ]);
    }
}