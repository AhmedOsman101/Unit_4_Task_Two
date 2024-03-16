<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        User::truncate();
        DB::table('users')->insert([
            [
                'name' => 'user',
                'email' => 'user@mail.com',
                'type' => 'team',
                'role' => 'user',
                'password' => Hash::make('root1234'),
            ],
            [
                'name' => 'Othman',
                'email' => 'root1@mail.com',
                'type' => 'individual',
                'role' => 'user',
                'password' => Hash::make('root1234'),
            ],
            [
                'name' => 'Othman',
                'email' => 'root14@mail.com',
                'type' => 'individual',
                'role' => 'user',
                'password' => Hash::make('root1234'),
            ],
            [
                'name' => 'Othman',
                'email' => 'root5@mail.com',
                'type' => null,
                'role' => 'admin',
                'password' => Hash::make('root1234'),
            ],
            [
                'name' => 'Othman',
                'email' => 'root50@mail.com',
                'type' => 'team',
                'role' => 'user',
                'password' => Hash::make('root1234'),
            ],
        ]);
    }
}
