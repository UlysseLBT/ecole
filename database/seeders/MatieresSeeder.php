<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MatieresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('matieres')->insert([
            ['nom' => 'Mathematiques'],
            ['nom' => 'Physique'],
            ['nom' => 'Chimie'],
            ['nom' => 'Biologie'],
            ['nom' => 'Informatique'],
            ['nom' => 'Anglais'],
            ['nom' => 'Francais'],
            ['nom' => 'Histoire'],
            ['nom' => 'Geographie'],
            ['nom' => 'Philosophie'],
        ]);
    }
}
