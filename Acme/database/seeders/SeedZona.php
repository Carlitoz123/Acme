<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedZona extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('zona')->insert([
            "name_zona"=>'Dublan',

            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
        DB::table('zona')->insert([
            "name_zona"=>'colosio',

            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
    }
}
