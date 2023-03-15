<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


/* importing database */
use Illuminate\Support\Facades\DB;
/* this is for encrypting passwords */
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name'=>'Mitchelle Otieno Blackie',
            'email'=>'mitchelleblackie01@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
