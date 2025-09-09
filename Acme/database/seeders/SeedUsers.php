<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class SeedUsers extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            "name"=>'Carlos Octavio Eguino Galvez',
            "email"=>'carlitos@gmail.com',
            "password"=>Hash::make('123'),
            
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
        DB::table('users')->insert([
            "name"=>'Marco Esteban Rubio',
            "email"=>'marquitos@gmail.com',
            "password"=>Hash::make('123'),
            
            'created_at'=>date('Y-m-d h:m:s') //2025-12-12

        ]);
    }
}
