<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'ajimenez',
            'name_user'  => 'ALFREDO',
            'paterno'  => 'JIMENEZ',
            'materno'  => 'PEREZ',
            'email' => 'jimenez@gmail.com',
            'password' => bcrypt('secret'),
            'company_id' => 1,
        ]);
        DB::table('users')->insert([
            'name'  => 'kmolina',
            'name_user'  => 'KAREN',
            'paterno' => 'MOLINA',
            'materno' => 'RIOS',
            'email' => 'kmolina@gmail.com',
            'password' => bcrypt('secret'),
            'company_id' => 2,
        ]);
        DB::table('users')->insert([
            'name'  => 'rsanchez',
            'name_user'  => 'REBECA',
            'paterno' => 'SANCHEZ',
            'materno' => 'NEGRETE',
            'email' => 'rsanchez@gmail.com',
            'password' => bcrypt('secret'),
            'company_id' => 3,
        ]);                
    }
}
