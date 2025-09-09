<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedHojas extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('hojas')->insert([
            "planos_id"=>1,
            "numero_hoja"=>'4',
            "descripci0on"=>'plano de casa blanca grande',
            
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
        DB::table('hojas')->insert([
            "planos_id"=>2,
            "numero_hoja"=>'6',
            "descripci0on"=>'plano de motel ubicado en las vegas',
            
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
    
    }
}
