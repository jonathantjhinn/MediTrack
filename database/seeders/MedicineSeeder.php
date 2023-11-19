<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('medicine')->insert([
            'medcode' => 'CO001',
            'name' => 'Acetylcysteine 200 mg 10 Kapsul',
            'price' => 23500,
            'qty' => 300,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('medicine')->insert([
            'medcode' => 'CO002',
            'name' => 'Bonefos 400 mg 10 Kapsul',
            'price' => 326000,
            'qty' => 300,
            'created_at' => date('Y-m-d H:i:s')
        ]);
        DB::table('medicine')->insert([
            'medcode' => 'CO003',
            'name' => 'Ferriprox Tablet 500 mg',
            'price' => 48800,
            'qty' => 300,
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
