<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;



class VolunteerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table('volunteers')->insert([
               'name' => 'volunteer',
               'email' => 'volunteer@gmail.com',
               'password' => Hash::make('password'),
               'status' => '1',
           ]);
    }
}
