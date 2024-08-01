<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    public function run(): void
    {
        User::create([
            'name' => 'Juanjo',
            'email' => 'juanjo@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Luis',
            'email' => 'luis@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Maria',
            'email' => 'maria@gmail.com',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'Carla',
            'email' => 'carla@gmail.com',
            'password' => Hash::make('12345678')
        ]);
    }
}
