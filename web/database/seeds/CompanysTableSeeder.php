<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CompanysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('companys')->insert([
            'uuid' => '5bcf52285300b',
            'rut' => 77777777,
            'dv' => '7',
            'name' => 'EMPRESA ALFA SPA',
        ]);
        DB::table('companys')->insert([
            'uuid' => '5bcf541eb144e',
            'rut' => 88888888,
            'dv' => '8',
            'name' => 'EMPRESA BETA SPA',
        ]);
        DB::table('companys')->insert([
            'uuid' => '5bcf54252a196',
            'rut' => 99999999,
            'dv' => '9',
            'name' => 'EMPRESA GAMA SPA',
        ]);        
    }
}
