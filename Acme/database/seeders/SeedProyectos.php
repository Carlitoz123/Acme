<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeedProyectos extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('projects')->insert([
            "name_projects"=>'departamento',
            "direccion"=>'Independencia #2444,col Centro, Nuevo casas grandes',
            "zona_id"=>'1',
            "planos_id"=>'1',
            "fecha_inicio"=>'2023-01-05',
            "fecha_final"=>'2026-06-14',
            
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
        DB::table('projects')->insert([
            "name_projects"=>'motel',
            "direccion"=>'callejon 8 #3312,col obrera, Nuevo casas grandes',
            "zona_id"=>'2',
            "planos_id"=>'2',
            "fecha_inicio"=>'2024-02-20',
            "fecha_final"=>'2027-02-28',
            
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
    }
}
