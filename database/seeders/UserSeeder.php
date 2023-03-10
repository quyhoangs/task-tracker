<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Project;
use App\Models\Task;
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
       $user =  User::factory(15)->create()->each(function ($user) {
            $project = Project::create(
                [
                    'title' => 'Project Title',
                    'description' => 'Project Description',
                    'owner_id' => $user->id,
                    'notes' => 'General notes here.'
                ]
            );
        });
    }
}
