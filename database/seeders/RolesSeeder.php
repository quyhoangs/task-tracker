<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Create 1 User with 1 Role and 1 Permission (Admin)
        $user = User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'is_email_verified' => '1',
            'password' => bcrypt('admin@gmail.com'),
            'role_id' => '1'
        ]);

        //define role table
        //1 = Admin , 2 = Manager , 3 = User
        $roles = [
            [
                'id' => '1',
                'name' => 'Admin',
            ],
            [
                'id' => '2',
                'name' => 'Manager',
            ],
            [
                'id' => '3',
                'name' => 'User',
            ],
        ];

        //insert into role table
        Role::insert($roles);
    }
}
