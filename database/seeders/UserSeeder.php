<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name'=> 'Tami',
            'email'=> 'tami@gmail.com',
            'password'=> Hash::make('banyuasin2020'),
            'role'=> 'admin',
            'created_at'=> \Carbon\Carbon::now(),
            'email_verified_at'=> \Carbon\Carbon::now()
        ]);
    }
}
