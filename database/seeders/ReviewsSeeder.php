<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('reviews')->insert([
            [
                'name' => 'Abdulqodiri', 
                'surname' => 'Azizzoda', 
                'event_id' => 5, 
                'content' => 'Ребята были очень отзывчивые, работали достаточно оперативно, были очень дружелюбны и во всем старались помогать',
                'stars' => '5'
            ],
            [
                'name' => 'Kamola', 
                'surname' => 'Narimonova', 
                'event_id' => 6, 
                'content' => 'Juda qiziq bo\'ldi ular bilan. Bizga boshidan oxirgcha aktiv bo\'lib, yordam berdilar. Zerikkanimizda ham qiziqtirib turdilar. Birga har xil joylarga borib mazza qildik. Masuliyatli ekanlar ham.',
                'stars' => '3'
            ],
            [
                'name' => 'Abror', 
                'surname' => 'Dilmurodov', 
                'event_id' => 7, 
                'content' => 'Men o\'qituvchi sifatida shu volontyor misolida juda havasim keldi, mening orzuyim shunaqa o\'quvchilarni shakllantirish edi...',
                'stars' => '4'
            ],
            [
                'name' => 'Uktamov', 
                'surname' => 'Raximbek', 
                'event_id' => 8, 
                'content' => 'Juda qiziq bo\'ldi ular bilan. Bizga boshidan oxirgcha aktiv bo\'lib, yordam berdilar. Zerikkanimizda ham qiziqtirib turdilar. Birga har xil joylarga borib mazza qildik. Masuliyatli ekanlar ham.',
                'stars' => '5'
            ]
        ]);
    }
}
