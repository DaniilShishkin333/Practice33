<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stadium extends Model
{
    protected $fillable = ['name', 'number_of_seats'];

    public function teams()
    {
        return $this->belongsToMany(Team::class, 'stadiums_has_teams', 'stadium_id', 'team_id');
    }
}