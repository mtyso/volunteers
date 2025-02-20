<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;

    // Specify the table if it's different from the default table name
    protected $table = 'partners';

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name', 'content', 'img', 'instagramlink', 'event_id'
    ];

    // Define any relationships if needed (e.g., if this model has a relationship with the Event model)
    // Example: A partner belongs to an event (if the event_id field is a foreign key)
    public function event()
    {
        return $this->belongsTo(Event::class, 'event_id');
    }
}
