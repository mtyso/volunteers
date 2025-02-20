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

        $this->call([
            AdminUserSeeder::class,
            EventsSeeder::class,
            FaqSeeder::class,
            GlanceSeeder::class,
            PartnersSeeder::class, 
            ReviewsSeeder::class, 
            RolesSeeder::class,  
            TeammembersSeeder::class
            // other seeders
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        
    }

   
}
