<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CreateUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            [
               'name'=>'Candidate',
               'email'=>'candidate@gmail.com',
               'phone'=> 0733333333,
               'role'=> 0,
               'password'=> bcrypt('candidate123'),
            ],
            [
               'name'=>'Employer',
               'email'=>'employer@gmail.com',
               'phone'=> 0722222222,
               'role'=> 1,
               'password'=> bcrypt('employer123'),
            ],
        ]);
    }
}
