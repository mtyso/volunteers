<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TeammembersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('teammembers')->insert([
            ['name' => 'Sardorbek', 'surname' => 'Abdumanabov', 'tgusername' => '@SardorbekAbdumanabov', 'instagramlink' => 'abdumanabov_s', 'img' => 'sardorbekabdumanabov.jpg'],
            ['name' => 'Sunnatillo', 'surname' => 'Khujayev', 'tgusername' => '@XS25_8', 'instagramlink' => 'sunnatillo25_8', 'img' => 'sunnatillokhujayev.jpg'],
            ['name' => 'Aslbek', 'surname' => 'Salixov', 'tgusername' => '@howulikezat', 'instagramlink' => 'hylth.134', 'img' => 'aslbeksalixov.jpg'],
            ['name' => 'Elyorbek', 'surname' => 'Mamarasulov', 'tgusername' => '@mtyso', 'instagramlink' => 'mtyso_o', 'img' => 'elyorbekmamarasulov.jpg'],
            ['name' => 'Sevinch', 'surname' => 'Sayfutdinova', 'tgusername' => '@rrwsh', 'instagramlink' => 'wr.tyy', 'img' => 'sevinchsayfutdinova.jpg'],
            ['name' => 'Saloxiddin', 'surname' => 'Tojiboyev', 'tgusername' => '@salohiddin_t', 'instagramlink' => 'stojiboyev008', 'img' => 'salokhiddintojiboyev.jpg'],
            ['name' => 'Asilbek', 'surname' => 'Adnayev', 'tgusername' => '@Adnaev', 'instagramlink' => 'adnaev_', 'img' => 'asilbekadnayev.jpg'],
            ['name' => 'Otabek', 'surname' => 'Odilov', 'tgusername' => '@meOtabek_07', 'instagramlink' => '__hello_0_7', 'img' => 'otabekodilov.jpg'],
            ['name' => 'Shohnur', 'surname' => 'Uktamov', 'tgusername' => '@ShohnurUktamov', 'instagramlink' => 'uktamovshohnur', 'img' => 'shokhnuruktamov.jpg'],
            ['name' => 'Ibrokhim', 'surname' => 'Rikhsiyev', 'tgusername' => '@rikhsiiev', 'instagramlink' => 'rikhsiyev_i', 'img' => 'ibrokhimrikhsiyev.jpg'],
            ['name' => 'Benazir', 'surname' => 'Abdulakimova', 'tgusername' => '@Milady_22', 'instagramlink' => 'milady.b_', 'img' => 'benazirabdulakimova.jpg'],
            ['name' => 'Izzatbek', 'surname' => 'Akbarov', 'tgusername' => '@AI_2512', 'instagramlink' => 'izzatbek2512', 'img' => 'izzatbekakbarov.jpg'],
        ]);
    }
}
