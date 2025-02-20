<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    // If the table name is different than the default, you can specify it
    protected $table = 'reviews'; // Not necessary if you follow Laravel's naming convention

    // Define the fillable fields to allow mass assignment
    protected $fillable = [
        'name', 
        'surname', 
        'event_id', 
        'content', 
        'stars',
    ];

    // If you want to ensure that 'stars' is cast to an integer
    protected $casts = [
        'stars' => 'integer',
    ];

    // Define relationships (if any). Example if you have an Event model and relation:
    public function event()
    {
        return $this->belongsTo(Event::class); // Assuming you have an Event model
    }
}
