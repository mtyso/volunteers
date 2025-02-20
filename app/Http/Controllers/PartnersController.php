<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = DB::table('partners')->select('*')->get();
        return view('partners', ['partners' => $partners]);

    }
}
