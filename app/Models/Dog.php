<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dog extends Model
{
    use HasFactory;

    function scopeAgeGreaterThan($query, $age)
    {
        return $query->where('age', '>', $age);
    }

    function scopeGender($query, $gender)
    {
        return $query->where('gender', $gender);
    }

    function dogsForSpecialTreatment($gender)
    {
        return $this->AgeGreaterThan(6)->gender($gender);
    }
}
