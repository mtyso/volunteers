<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'roletype', 'teammember_id'
    ];

    // Define the inverse relationship with TeamMember
    public function teamMember()
    {
        return $this->belongsTo(TeamMember::class);
    }
}
