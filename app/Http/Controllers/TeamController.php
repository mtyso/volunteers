<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TeamController extends Controller
{
    // Display a listing of the resource
    public function index()
    {
        $adminteam = DB::table('teammembers')->join('roles', 'teammembers.id', '=', 'roles.teammember_id')->where('roles.roletype', 'admin')->select('teammembers.*', 'roles.name AS rolename')->get();
        $mediateam = DB::table('teammembers')->join( 'roles', 'teammembers.id', '=', 'roles.teammember_id')->where('roles.roletype', 'media')->select('teammembers.*', 'roles.name AS rolename')->get();
        $devteam = DB::table('teammembers')->join('roles', 'teammembers.id', '=', 'roles.teammember_id')->where('roles.roletype', 'developer')->select('teammembers.*', 'roles.name AS rolename')->get();
        $menteam = DB::table('teammembers')->join('roles', 'teammembers.id', '=', 'roles.teammember_id')->where('roles.roletype', 'mentor')->select('teammembers.*', 'roles.name AS rolename')->get();
        
        return view('team', ['adminteam' => $adminteam, 'mediateam' => $mediateam, 'devteam' => $devteam, 'menteam' => $menteam]);

    }
}

