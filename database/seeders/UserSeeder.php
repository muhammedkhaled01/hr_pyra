<?php

namespace Database\Seeders;

use App\Models\Department;
use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{

    /**
     * List of applications to add.
     */

    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $faker = Faker::create();

        $user_hr = User::create([
            'name' => 'belal',
            'email' => 'hr@test.com',
            'password' => bcrypt("123456"),
            'phone' => "01203376449",

            'contact_phone' => "01211018851",
            'national_id' => "30201010214378",

            'image' => $faker->imageUrl(),
            'gender' => 'M',
            'department_id' => 1,
        ]);
        $user_manager = User::create([
            'name' => 'mohamed',
            'email' => 'manager@test.com',
            'password' => bcrypt("123456"),
            'phone' => "01203376447",
            'contact_phone' => "01211018850",
            'national_id' => "30201010214377",
            'gender' => 'M',
            'department_id' => 2,
        ]);
        $user_emp = User::create([
            'name' => 'Rana',
            'email' => 'emp@test.com',
            'password' => bcrypt("123456"),
            'phone' => "01203376440",
            'contact_phone' => "01211018856",
            'national_id' => "30201010214376",
            'gender' => 'F',
            'department_id' => 2,
        ]);
        $department = Department::findOrFail(1);
        $department->update(['manager_id' => 1]);

        $department = Department::findOrFail(2);
        $department->update(['manager_id' => 2]);

    }
}
