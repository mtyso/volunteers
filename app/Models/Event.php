<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    // Specify the table if it's different from the default
    protected $table = 'events';  // For example, if your table name is 'events'

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name', 'date', 'intro', 'place', 'img', 'img2', 'content'
    ];

    public $timestamps = false;

}
