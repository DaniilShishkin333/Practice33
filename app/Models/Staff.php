<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $table = 'staffs';

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
