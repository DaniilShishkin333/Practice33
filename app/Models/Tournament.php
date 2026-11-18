<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tournament extends Model
{
    public function teams()
    {
        return $this->belongsToMany(Team::class, 'teams_has_tournaments', 'tournament_id', 'team_id');
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
