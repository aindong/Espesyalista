<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    public function clinic()
    {
        return $this->belongsTo('App\Models\Clinic');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function service()
    {
        return $this->belongsTo('App\Models\ClinicService');
    }
}
