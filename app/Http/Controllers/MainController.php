<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        // $post = DB::table('events')->get();
        // dd($post);
        $events = DB::table('events')->select('*')->get();
        $glance = DB::table('glance')->select('*')->get();
        $partners = DB::table('partners')->select('*')->get();
        $faq = DB::table('faqs')->select('*')->get();
        $devteam = DB::table('teammembers')->join('roles', 'teammembers.id', '=', 'roles.teammember_id')->where('roles.roletype', 'developer')->select('teammembers.*', 'roles.name AS rolename')->get();
        $reviews = DB::table('reviews')->join('events', 'events.id', '=', 'reviews.event_id')->select('reviews.*', 'events.name as eventname', 'events.img2 as event_img')->get();

        return view('main', ['events' => $events, 'glance' => $glance, 'partners' => $partners, 'faq' => $faq, 'devteam' => $devteam, 'reviews'=>$reviews ]);
    }
}
