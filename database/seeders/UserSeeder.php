<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;
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
        \App\Models\User::factory()->create([
            'name' =>'Vestia Zeta',
            'email' =>'zeta@gmail.com',
            'nik' =>'0082199023090',
            'password' =>bcrypt('12345'),
            'remember_token' =>Str::random('60'),
        ]);
        \App\Models\User::factory()->create([
            'name' =>'Jack',
            'email' =>'jack@gmail.com',
            'nik' =>'0082199023066',
            'password' =>bcrypt('12345'),
            'remember_token' =>Str::random('60'),
        ]);
    }
}
