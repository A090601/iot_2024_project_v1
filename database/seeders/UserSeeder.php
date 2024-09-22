<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = User::create([
            'name' => 'wafi',
            'email' => 'wafi@gmail.com',
            'password' => bcrypt('12345')
        ]);

        $admin->assignRole('admin');

        $management = User::create([
            'name' => 'ainur',
            'email' => 'ainur@gmail.com',
            'password' => bcrypt('ainur1234')
        ]);

        $management->assignRole('');

       $kepala management = User::create([
            'name' => 'dimas',
            'email' => 'dimas@gmail.com',
            'password' => bcrypt('dimas12345')
        ]);

        $kepalamanagement->assignRole('');
    }
}
