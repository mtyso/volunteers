<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GlanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('glance')->insert([
            [ 'name' => 'Active Volunteers', 'number' => 84],
            [ 'name' => 'Projects Completed', 'number' => 3],
            [ 'name' => 'Hours Donated', 'number' => 2000],
            [ 'name' => 'Volunteers Trained', 'number' => 54],
            [ 'name' => 'Funds Raised', 'number' => 200],
            [ 'name' => 'Events Held', 'number' => 15],
        ]);
    }
}
