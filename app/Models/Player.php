<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Player extends Model
{
    protected $fillable = ['name', 'year', 'number', 'team_id', 'city_id'];

public function team()
{
    return $this->belongsTo(Team::class);
}
public function city()
{
    return $this->belongsTo(City::class);
}
}

