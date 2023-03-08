<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user')->insert([[
            'name' => 'nico',
            'email' => 'nico@gmail.com',
            'phone' => '1154443888',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'fer',
            'email' => 'fer@gmail.com',
            'phone' => '1154443388',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'manu',
            'email' => 'manu@gmail.com',
            'phone' => '1154243888',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'yae',
            'email' => 'yae@gmail.com',
            'phone' => '1151343888',
            'created_at' => now(),
            'updated_at' => now()
        ]]);

        DB::table('category')->insert([[
            'name' => 'Sports',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'Finance',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'Movies',
            'created_at' => now(),
            'updated_at' => now()
        ]]);

        DB::table('channel')->insert([[
            'name' => 'SMS',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'E-mail',
            'created_at' => now(),
            'updated_at' => now()
        ], [
            'name' => 'Push',
            'created_at' => now(),
            'updated_at' => now()
        ]]);
    }
}
