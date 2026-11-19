<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';
    
    protected $fillable = ['name', 'year', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}