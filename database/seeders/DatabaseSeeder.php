<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Dosen;
use App\Models\Mahasiswa;
use App\Models\MataKuliah;
use App\Models\Relation;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        
        $this->call([
            DosenSeeder::class,
            MahasiswaSeeder::class,
            MatakuliahSeeder::class,
            RelationSeeder::class,
            UserSeeder::class,
        ]);

    }
}
