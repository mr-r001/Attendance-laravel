<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Attendance extends Model
{
    protected $fillable = [
        'user_id',
        'date',
        'time_in',
        'status_timein',
        'time_out',
        'status_timeout',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
