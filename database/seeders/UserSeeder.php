<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Vania',
            'email' => 'vania@mail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('vaniaPassword'),
        ]);
        DB::table('users')->insert([
            'name' => 'Ura',
            'email' => 'ura@mail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('uraPassword'),
        ]);
        DB::table('users')->insert([
            'name' => 'Vlad',
            'email' => 'vlad@mail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('vladPassword'),
        ]);
        DB::table('users')->insert([
            'name' => 'Luda',
            'email' => 'luda@mail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('ludaPassword'),
        ]);
        DB::table('users')->insert([
            'name' => 'Misha',
            'email' => 'misha@mail.com',
            'email_verified_at' => date('Y-m-d H:i:s'),
            'password' => Hash::make('mishaPassword'),
        ]);
    }
}
