<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FaqsController extends Controller
{
    public function index()
    {
        $faq = DB::table('faqs')->select('*')->get();

        return view('faqs', ['faq' => $faq]);

    }
}
