<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
           [ 
            'name'=>"Admin User",
            'username'=>"admin",
            "password"=>bcrypt('12345678'),
            "role"=>'admin',
            "email"=>'admin@gmail.com',
            "status"=>'active'
           ],
             [ 
            'name'=>"vendor",
            'username'=>"vedor",
            "password"=>bcrypt('12345678'),
            "role"=>'vendor',
            "email"=>'vendor@gmail.com',
            "status"=>'active'
             ],
             [ 
            'name'=>"user",
            'username'=>"user",
            "password"=>bcrypt('12345678'),
            "role"=>'user',
            "email"=>'user@gmail.com',
            "status"=>'active'
            ]
        ]);    
    }
}
