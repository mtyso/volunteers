<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('events')->insert([
            [
                'name' => 'Opening Ceremony of the Volunteers Group',
                'intro' => 'The opening ceremony of the "Al-Khwarizmi Volunteers" group was held at the specialized school named after Muhammad al-Khwarizmi.',
                'place' => 'Al-Khwarizmi school',
                'date' => '2024-05-08',
                'img' => 'volochmar1.jpg',
                'img2' => 'volochmar2.jpg',
                'content' => '🔔A ceremony for the opening of the "Al-Khwarizmi Volunteers" group was held at the Muhammad al-Khwarizmi Specialized School. The opening ceremony was conducted under the leadership of the schools Deputy Director for Specialized Subjects, Fazliddin Ismailov. As a special guest, the Director of the Uzbekistan Volunteers Association, Shirin Abidova, participated in the event.
                
                During the event, the goals and future plans of the "Al-Khwarizmi Volunteers" group were discussed, and Shirin Abidova also conducted various interesting interactive games.
                
                The students actively engaged in lively debates during the games and shared their impressions with the head of the association. Through this, they identified the key qualities needed for volunteers and learned about the advantages and goals of volunteering.',
            ],
            [
                'name' => 'Admin Interview for Joining the Team',
                'intro' => 'Today, at the Muhammad al-Khwarizmi Specialized School, an interview was held with students of grades 8, 9, 10, and 11 to join the admin team of the "Al-Khwarizmi Volunteers" group!',
                'place' => 'Al-Khwarizmi school',
                'date' => '2024-05-15',
                'img' => 'admsuh1.jpg',
                'img2' => 'admsuh2.jpg',
                'content' => 'Today, at the Muhammad al-Khwarizmi Specialized School, an interview was held with students of grades 8, 9, 10, and 11 to join the admin team of the "Al-Khwarizmi Volunteers" group!
                
                The interview was conducted by the group’s chief coordinators Abdumanabov Sardorbek, Xujayev Sunnatillo, and coordinator Sattorjonov Asomiddin.
                
                More than 20 students participated in this interview, and various topics were discussed with them. At the end of the interview, participants got answers to their questions of interest.'
            ],
            [
                'name' => 'First Volunteer Training',
                'intro' => 'Today, the first meeting among the members of the volunteer school took place.',
      
    'place' => 'Al-Khwarizmi school',
    'date' => '2024-05-16',
    'img' => 'birvoldar1.jpg',
    'img2' => 'birvoldar2.jpg',
    'content' => 'Today, the first meeting among the members of the volunteer school took place.
    
    The lesson started with new members introducing themselves, and during the lesson, the new participants gained detailed information about what volunteering is, the 3 important principles of it, and the foundations of these principles.
    
    Additionally, the group discussed future plans, especially the preparation for the first event that our team will participate in, and the distribution of tasks among team members.'
],
[
    'name' => 'The First Step Toward Cooperation',
    'intro' => 'The first official memorandum between the "Al-Khwarizmi Volunteers" and "ECO-UNION" teams was held at the school, aiming to establish mutually beneficial cooperation in implementing ecological and volunteer initiatives.',
    'place' => 'Al-Khwarizmi school',
    'date' => '2024-05-17',
    'img' => 'hamqad1.jpg',
    'img2' => 'hamqad2.jpg',
    
    'content' => 'The first official memorandum between the "Al-Khwarizmi Volunteers" and "ECO-UNION" teams was held at the school, aiming to establish mutually beneficial cooperation in implementing ecological and volunteer initiatives.
    
    📈 In this lively meeting, which set big goals for both groups, the following agreements were reached:
        
        ⏺️ Organizing ecological festivals and competitions, lectures, seminars, and workshops regularly on topics such as environmental protection, sustainable development, and other related subjects to increase students\' interest in ecological issues;
        ⏺️ Organizing events in Tashkent to improve the ecological situation, including tree planting and cleaning areas through volunteer work;
        ⏺️ Developing the teams\' public information services and exchanging news about ongoing and planned projects and events.'
],            
[
    'name' => 'Al-Khwarizmi Olympiad',
    'intro' => 'The "Al-Khwarizmi Volunteers" team will begin their first volunteer activity at the second Al-Khwarizmi International Olympiad for young mathematicians, held in Uzbekistan.',
    'place' => 'Al-Khwarizmi School',
    'date' => '2024-05-25',
    'img' => 'alxorol1.jpg',
    'img2' => 'alxorol2.jpg',
    'content' => 'The 2nd Al-Khwarizmi International Olympiad for Young Mathematicians will take place from May 26 to 31, 2024, at the Muhammad al-Khwarizmi Specialized School in Tashkent.
    
    At this Olympiad, students who won the 1st, 2nd, and 3rd places in the regional stage of the Al-Khwarizmi Olympiad among 7th and 8th grade students will participate. It is expected that more than 80 Olympiad participants from Uzbekistan will attend.
    
    In addition, teams from several foreign countries, including Azerbaijan, Tajikistan, Kazakhstan, Kyrgyzstan, and Turkmenistan, will also participate.
    
    The winners of the international Olympiad will receive diplomas and medals, while our volunteers will receive relevant certificates.'
],
[
    'name' => 'International Al-Khwarizmi Olympiad — Day 1',
    'intro' => 'On May 26, "Al-Khwarizmi Volunteers" started the day by welcoming Olympiad participants from all regions and countries and accommodating them in their designated rooms.',
    'place' => 'Al-Khwarizmi school',
    'date' => '2024-05-26',
    'img' => 'xorol1kun1.jpg',
    'img2' => 'xorol1kun2.jpg',
    'content' => 'On May 26, "Al-Khwarizmi Volunteers" started by welcoming Olympiad participants from all regions and countries, placing them in their designated rooms. After lunch, the volunteers responsible for each region and country organized a tour of the Muhammad al-Khwarizmi Specialized School for their teams. After the tour, a competition named "Big Ball Volleyball" was held.'
],
[
    'name' => 'International Al-Khwarizmi Olympiad — Day 2',
    'intro' => 'On May 27, the "Al-Khwarizmi Volunteers" team organized various sports competitions for the Olympiad participants.',
    'place' => 'Al-Khwarizmi school',
    'date' => '2024-05-27',
    'img' => 'xorol2kun1.jpg',
    'img2' => 'xorol2kun2.jpg',
    'content' => 'On May 27, the "Al-Khwarizmi Volunteers" team organized various sports competitions for the Olympiad participants. Teams of 5 participants gathered to take part in volleyball, basketball, and esports games. Additionally, individual sports such as chess and ping-pong competitions were also held. The winners of each sport were awarded special certificates and received worthy prizes.'
],
[
    'name' => 'Al-Khwarizmi Olympiad Concludes',
    'intro' => 'The 2nd International Young Mathematicians Olympiad, with the participation of the "Al-Khwarizmi Volunteers" team, has come to an end.',
    'place' => 'Al-Khwarizmi school',
    'date' => '2024-06-01',
    'img' => 'xorolyakun1.jpg',
    'img2' => 'xorolyakun2.jpg',
    'content' => 'The 2nd International Young Mathematicians Olympiad, with the participation of the "Al-Khwarizmi Volunteers" team, has come to an end. Over 30 volunteers were accepted to work as volunteers for this major event, which united volunteers into a big family. Each volunteer was assigned to assist the teams from each region and country. They ensured that participants had timely meals, actively participated in the competitions, and learned more about the Olympiad during these 5 days. Volunteer activities during the Olympiad included: 🔵 Organizing various (individual and team) sports competitions aimed at creating a friendly and positive environment, conducting them in an interesting way, and properly rewarding the winners; 🔵 Ensuring the cleanliness and orderliness of the kitchen while organizing meal shifts; 🔵 Assisting in maintaining the integrity of the Olympiad, helping to maintain order during the events, ensuring participants followed the rules, and providing a fair and transparent competitive environment; 🔵 Organizing and coordinating tours through the museum and amusement park, and accompanying participants during the tour. At the end of the event, each volunteer was awarded a certificate. Additionally, today an online meeting was held with the volunteers, where they shared their thoughts about how meaningful their time was and expressed their eagerness to participate in future projects, looking forward to being part of them again.'
],
[
    'name' => 'Green Games',
    'intro' => 'On June 11, the "GREEN GAMES" event took place.',
    'place' => 'Eco-Park',
    'date' => '2024-06-11',
    'img' => 'yashoy1.jpg',
    'img2' => 'yashoy2.jpg',
    'content' => 'On June 11, the "GREEN GAMES" event took place. This competition, organized by the "Al-Khwarizmi Volunteers" and "ECO-UNION" teams, was aimed at preventing waste disposal and encouraging cleaning up. Participants competed in teams of two to collect the most waste. Additionally, questions were distributed throughout the entire "Eco-Park" area, and teams had to find answers and meet at a common point. Each participant was awarded a certificate. The teams that actively participated in both challenges were presented with gifts from the "Ecological Party of Uzbekistan."'
],
[
    'name' => 'World Youth Festival',
    'intro' => 'Our "Al-Khwarizmi Volunteers" once again proved their dedication and active life position by volunteering at the first-ever World Youth Festival held in Uzbekistan.',
    'place' => 'Volunteers Association',
    'date' => '2024-07-01',
    'img' => 'butjahfes1.jpg',
    'img2' => 'butjahfes2.jpg',
    'content' => 'Our "Al-Khwarizmi Volunteers" once again proved their dedication and active life position by volunteering at the first-ever World Youth Festival held in Uzbekistan. This festival hosted youth participants from around the world, and our volunteers played an important part in this grand event. Their work not only contributed to the successful organization and execution of the festival but also left an indelible mark on the hearts of participants and guests. The volunteers demonstrated a high level of performance, taking on many tasks and responsibilities, including: 🔵 Organizing events: Volunteers assisted in preparing and conducting various festival events, ensuring the smooth running of all planned activities. 🔵 Welcoming and accompanying guests: Volunteers warmly welcomed guests from different countries and provided assistance throughout the festival by guiding them through the venues and offering necessary information. 🔵 Media assistance: Our media team actively participated in creating videos and posts for UVA’s Telegram and Instagram pages. Their efforts and dedication greatly contributed to the festival’s success. We are proud of our volunteers’ commitment, enthusiasm, and desire to make the world a better place. We highly appreciate their contributions to the success of the festival!'
],
[
    'name' => 'Digital Generation Girls',
    'intro' => 'A "Digital Generation Girls" event took place at the Muhammad al-Khwarizmi Specialized School.',
    'place' => 'Al-Khwarizmi school',
    'date' => '2024-08-01',
    'img' => 'digengir1.jpg',
    'img2' => 'digengir2.jpg',
    'content' => 'Today, on August 1, a "Digital Generation Girls" event took place at the Muhammad al-Khwarizmi Specialized School. 🇺🇿🇦🇪 Guests from Uzbekistan and the United Arab Emirates participated in interactive lessons in 7 different areas: 🔵 Math / Physics 🔵 Biology 🔵 Art 🔵 Digital Art 🔵 Media Art 🔵 Engineering 🔵 Computer Science. Each of these areas was accompanied by one of our volunteers. They helped mentors by ensuring that the lessons were enjoyable, facilitating communication between participants and instructors, and maintaining the flow of the event. Before the large-scale event began, the volunteers worked hard to prepare and make sure everything was in order. In addition, interactive competitions organized by "Time to like" and "Al-Khwarizmi Volunteers" teams were held. At the end of the program, each group prepared a presentation about the event, lessons, and the day. Each participant was awarded a certificate and a special gift.'
],
[
    'name' => 'Natural Sciences Festival',
    'intro' => 'On August 13-14, the "Natural Sciences Festival," organized in collaboration with the Republic of Korea, concluded at the Muhammad al-Khwarizmi Specialized School.',
    'place' => 'Al-Khwarizmi school',
    'date' => '2024-08-14',
    'img' => 'tabfanfes1.jpg',
    'img2' => 'tabfanfes2.jpg',
    'content' => 'On August 13-14, the "Natural Sciences Festival," organized in collaboration with the Republic of Korea, concluded at the Muhammad al-Khwarizmi Specialized School. Over two days, students from various schools learned how to solve various mathematical and physics problems through games. They also had the opportunity to create popular scientific items with their own hands and take them home. The first day began with an opening ceremony, attended by 400 participants. Throughout the day, students had the opportunity to visit 21 different sections, with our volunteers assigned as responsible assistants for each section. On the second day, the registration of participants continued in two shifts. In total, the event involved nearly 2,000 participants. At the end of the day, the guests, along with "Al-Khwarizmi Volunteers," visited the Tashkent TV tower.'
],
[
    'name' => 'Meeting with Nobel Laureate',
    'intro' => 'Yesterday, the French scientist, Nobel Prize winner in economics, Jean Tirol, visited the Muhammad al-Khwarizmi Specialized School during his first visit to Uzbekistan.',
    'place' => 'Al-Khwarizmi school',
    'date' => '2024-10-13',
    'img' => 'nosovuch1.jpg',
    'img2' => 'nosovuch2.jpg',
    'content' => 'MEETING WITH THE NOBEL LAUREATE — 13.10.2024
    Yesterday, the French scientist, Nobel Prize winner in economics, Jean Tirol, visited the Muhammad al-Khwarizmi Specialized School during his first visit to Uzbekistan.
    The scientist, who possesses deep knowledge and vast experience in industrial management, finance, macroeconomics, and banking management, is conducting extensive research in these fields.
    The "Al-Khwarizmi Volunteers" organized a campus tour for the Nobel laureate, introducing him to school life, the educational process, creative projects undertaken by the students, and their extracurricular activities.
    Jean Tirol, who was impressed by the school, noted how amazed he was by the students’ enthusiasm and interest in learning.'
]]);
}
}