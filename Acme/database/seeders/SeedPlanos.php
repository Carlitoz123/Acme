<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedPlanos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('planos')->insert([
            "name_plano"=>'Juventud',
            "archivo_pdf"=>'formas.pdf',
            "fecha_subida"=>'03/04/2025',
            "fecha_actualizacion"=>'2025-08-03',
            "version"=>'2',
            
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
        DB::table('planos')->insert([
            "name_plano"=>'Malpais',
            "archivo_pdf"=>'figurass.pdf',
            "fecha_subida"=>'2024-12-10',
            "fecha_actualizacion"=>'2025-07-06',
            "version"=>'3',
            
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
    }
}
