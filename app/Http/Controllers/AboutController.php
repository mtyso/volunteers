<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    public function index()
    {
        $glance = DB::table('glance')->select('*')->get();
        $partners = DB::table('partners')->select('*')->get();
        $devteam = DB::table('teammembers')->join('roles', 'teammembers.id', '=', 'roles.teammember_id')->where('roles.roletype', 'developer')->select('teammembers.*', 'roles.name AS rolename')->get();

        return view('about', ['glance' => $glance, 'partners' => $partners, 'devteam' => $devteam]);

    }
}
