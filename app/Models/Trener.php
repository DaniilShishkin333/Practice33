<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trener extends Model
{
    protected $fillable = ['name', 'year', 'team_id'];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
