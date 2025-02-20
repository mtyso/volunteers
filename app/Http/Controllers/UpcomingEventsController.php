<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UpcomingEventsController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $events = DB::table('events')->select(columns: '*')->get();
        $reviews = DB::table('reviews')->join('events', 'events.id', '=', 'reviews.event_id')->select('reviews.*', 'events.name as eventname')->get();
        $partners = DB::table('partners')->select('*')->get();
        
        return view('upcomings', ['events' => $events, 'partners' => $partners, 'reviews'=>$reviews]);

    }
}

