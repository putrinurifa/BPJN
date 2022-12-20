<?php

namespace Database\Seeders;
use Hash;
use App\Models\User;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users=[
            [
                'id' => 1,
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('admin123'),
                'status' => 'administrator',
                
                
            ],
            [
                'id' => 2,
                'name' => 'meliska',
                'email' => 'meliska@gmail.com',
                'password' => Hash::make('meliska123'),
                'status' => 'user',
                
                
            ],
        ];
        User::insert($users);
    }
}
