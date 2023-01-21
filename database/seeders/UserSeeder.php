<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //     $data = [
    //         ['name' => 'name', 'email' => 'admin@gmail.com', 'password' => Hash::make('password'),],
    //         ['name' => 'name1', 'email' => 'admin1@gmail.com', 'password' => Hash::make('password'),],
    //     ];

    //    foreach ($data as $key ) {
    //         DB::table('cruds')->insert($key);
    //     }

        for ($i = 0; $i < 10; $i++) {

            DB::table('cruds')->insert([
                'name' => Str::random(10),
                'email' => Str::random(10) . '@gmail.com',
                'umur' => 20,
            ]);
        }
    }
}
