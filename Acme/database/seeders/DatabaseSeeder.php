<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(SeedUsers::class);
        $this->call(SeedPlanos::class);
        $this->call(SeedZona::class);
        $this->call(SeedHojas::class);
        $this->call(SeedProyectos::class);
        
        

    
    }
}
