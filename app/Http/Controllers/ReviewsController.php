<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{
    public function index()
    {
        $reviews = DB::table('reviews')->join('events', 'events.id', '=', 'reviews.event_id')->select('reviews.*', 'events.name as eventname', 'events.img2 as event_img')->get();
        // dd($reviews);
        return view('reviews', ['reviews' => $reviews]);

    }
}
