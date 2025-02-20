<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{

    // Specify the table name if it's different from the default
    protected $table = 'faqs';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'question', 'answer', 'numid',
    ];
}
