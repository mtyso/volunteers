<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PartnersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('partners')->insert([
            [
                'name' => 'Uzbekistan Volunteer Association', 
                'content' => 'Al-Khwarizmi Volunteers and Uzbekistan Volunteer Association empower communities via education and cultural exchanges, fostering stability and inspiring engagement in projects.',
                'img' => 'uva.jpg',
                'instagramlink' => 'uva.uz',
                'event_id' => 14
            ],
            [
                'name' => 'Eco <br> Union', 
                'content' => 'Al-Khwarizmi Volunteers and Eco-Union uplift communities through education and environmental projects, involving youth in impactful activities that build resilience and encourage sustainable practices.',
                'img' => 'ecounion.jpg',
                'instagramlink' => 'ecounion.uz',
                'event_id' => 13
            ],
            [
                'name' => 'Emirates National Schools', 
                'content' => 'Al-Khwarizmi Volunteers and Emirates National Schools inspire youth in UAE through educational projects, fostering teamwork and responsibility for a sustainable future in their communities.',
                'img' => 'ensuae.jpg',
                'instagramlink' => 'ensuae',
                'event_id' => 15
            ],
            [
                'name' => 'Digital Generation Uzbekistan', 
                'content' => 'Al-Khwarizmi Volunteers and Digital Generation Uzbekistan promote social impact through technology, offering workshops to equip youth with digital skills for community-driven, innovative solutions.',
                'img' => 'dgu.jpg',
                'instagramlink' => 'dguzbekistan',
                'event_id' => 15
            ]
        ]);
    }
}
