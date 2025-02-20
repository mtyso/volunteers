<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FaqSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('faqs')->insert([
            ['question' => 'What is volunteering, and why is it important?', 'answer' => 'Volunteering is giving your time and skills to help others or support a cause, without expecting payment. It’s important because it strengthens communities, brings people together, and provides vital support to organizations working toward positive change.', 'numid' => 'One'],
            ['question' => 'How can I find the right volunteering opportunity for me?', 'answer' => 'Start by considering your skills, interests, and availability. Then, explore organizations that align with your passions. Many websites and platforms help match volunteers with opportunities, or you can reach out directly to local nonprofits.', 'numid' => 'Two'],
            ['question' => 'Do I need any special skills or experience to volunteer?', 'answer' => 'No special skills are usually required for most volunteer roles, as training is often provided. However, if you have specific skills like teaching, digital marketing, or medical training, some organizations may place you in roles where those skills are highly valuable.', 'numid' => 'Three'],
            ['question' => 'Can I volunteer if I have a busy schedule?', 'answer' => 'Absolutely! Many organizations offer flexible volunteer opportunities, such as remote or one-time events, that can fit around busy schedules. Discuss your availability with the organization, and they can help you find something that works.', 'numid' => 'Four'],
            ['question' => 'What are the benefits of volunteering?', 'answer' => 'Volunteering can help you develop new skills, make connections, and gain work experience. It also gives you the chance to give back to the community, boost your mental well-being, and find personal fulfillment.', 'numid' => 'Five'],
            ['question' => 'Is there an age requirement for volunteering?', 'answer' => 'Age requirements vary by organization and the type of work. Some roles require volunteers to be at least 16, while others are open to teens or even families. Be sure to ask about age requirements when exploring opportunities.', 'numid' => 'Six'],
        ]);
        }
}
