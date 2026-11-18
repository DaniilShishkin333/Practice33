<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function players()
    {
        return $this->hasMany(Player::class);
    }

    public function treners()
    {
        return $this->hasMany(Trener::class);
    }

    public function doctors()
    {
        return $this->hasMany(Doctor::class);
    }

    public function staffs()
    {
        return $this->hasMany(Staff::class);
    }

    public function stadiums()
    {
        return $this->belongsToMany(Stadium::class, 'stadiums_has_teams', 'team_id', 'stadium_id');
    }

    public function tournaments()
    {
        return $this->belongsToMany(Tournament::class, 'teams_has_tournaments', 'team_id', 'tournament_id');
    }
}
