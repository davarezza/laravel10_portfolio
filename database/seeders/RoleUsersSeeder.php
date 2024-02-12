<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoleUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name' => 'Dava Rezza',
                'email' => 'dava20@gmail.com',
                'role' => 'admin',
                'password' => bcrypt('123'),
            ],
            [
                'name' => 'Visitor',
                'email' => 'visitor@gmail.com',
                'role' => 'visitor',
                'password' => bcrypt('123'),
            ],
        ];
    }
}
