<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'username' => 'zhanik',
                'email' => 'zhan142004@gmail.com',
                'password' => Hash::make('user')
            ],
            [
                'username' => 'user1',
                'email' => 'user1@gmail.com',
                'password' => Hash::make('user')
            ],
        ];
        DB::table('users')->insert($users);
    }
}
