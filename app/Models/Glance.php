<?php 

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Glance extends Model
{
    // Specify the table if it's different from the default
    protected $table = 'glance';  // For example, if your table name is 'events'

    // Specify which attributes are mass assignable
    protected $fillable = [
        'name', 'number'
    ];
}
