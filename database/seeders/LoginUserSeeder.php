<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facdes\cd;
use Illuminate\Support\Facdes\Hash;


class LoginUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => Str::random(10),
            'email' => Str::random(10),
            'password' => Hash::make('1qaz'),
            'remember-token' => random(10),
        ]);
    }
}
