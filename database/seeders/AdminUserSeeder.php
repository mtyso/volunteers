<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',  // Replace with your desired admin email
            'password' => Hash::make('akv2025ahah'), // Use a strong password
            'is_admin' => true,  // Assuming you want to differentiate admin users using this attribute
        ]);
    }
}
