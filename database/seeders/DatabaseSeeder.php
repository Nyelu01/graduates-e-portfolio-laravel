<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
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
