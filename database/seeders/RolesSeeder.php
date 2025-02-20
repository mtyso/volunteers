<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->insert([
            ['name' => 'Founder, Head Coordinator', 'teammember_id' => 1, 'roletype' => 'admin'],
            ['name' => 'Co-Founder, Senior Coordinator', 'teammember_id' => 2, 'roletype' => 'admin'],
            ['name' => 'Video Editor, Designer', 'teammember_id' => 3, 'roletype' => 'media'],
            ['name' => 'Copywriter', 'teammember_id' => 4, 'roletype' => 'media'],
            ['name' => 'Senior Coordinator', 'teammember_id' => 4, 'roletype' => 'admin'],
            ['name' => 'Coordinator', 'teammember_id' => 6, 'roletype' => 'admin'],
            ['name' => 'Coordinator', 'teammember_id' => 7, 'roletype' => 'admin'],
            ['name' => 'Coordinator', 'teammember_id' => 8, 'roletype' => 'admin'],
            ['name' => 'Designer', 'teammember_id' => 9, 'roletype' => 'media'],
            ['name' => 'Head of Media', 'teammember_id' => 5, 'roletype' => 'media'],
            ['name' => 'Mentor of 10-03', 'teammember_id' => 11, 'roletype' => 'mentor'],
            ['name' => 'Frontend Developer', 'teammember_id' => 3, 'roletype' => 'developer'],
            ['name' => 'Backend Developer', 'teammember_id' => 4, 'roletype' => 'developer'],
            // ['name' => 'Assistant of Frontend Developer', 'teammember_id' => 5, 'roletype' => 'developer'],
            ['name' => 'Cooordinator', 'teammember_id' => 3, 'roletype' => 'admin'],
            // ['name' => 'Assistant of Backend Developer', 'teammember_id' => 12, 'roletype' => 'developer'],
        ]);
    }
}
