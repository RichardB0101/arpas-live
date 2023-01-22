<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Assignment;
use App\Models\Catalog;
use App\Models\Student;
use App\Models\Subject;
use App\Models\User;
use Illuminate\Database\Seeder;
use PhpParser\Node\Expr\Assign;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10)->create();
//
         User::factory()->create([
             'name' => 'Karol Narkiewicz',
             'email' => 'test@example.com',
              'role' => 'teacher',
             'password' => bcrypt('123123123')
         ]);

        User::factory()->create([
            'name' => 'Jan Abacki',
            'email' => 'student@example.com',
            'role' => 'student',
            'password' => bcrypt('123123123')
        ]);

            Assignment::factory(100)->create();




    }
}
