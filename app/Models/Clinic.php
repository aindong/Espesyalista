<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinic extends Model
{
    public function getLocationAttribute($value)
    {
        return unserialize($value);
    }
}
