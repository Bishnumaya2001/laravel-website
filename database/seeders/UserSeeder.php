<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Illuminate\Suppot\Facsdes\DB;
use Illuminate\Suppot\Facsdes\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('users')->insert([
            'name'=>'maya dhakal',
            'email'=>'dhakalbishnu159@gmail.com',
            'password'=>Hash::make('12345')
        ]);
    }
}
