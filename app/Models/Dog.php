<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Dog extends Model
{
    use HasFactory;
    use SoftDeletes;

    //Propiedad fillable leccion 07
    protected $fillable = ['name', 'age'];

    //Global scope -- Leccion 05
    /*  protected static function boot()
    {
        parent::boot();

        static::addGlobalScope('age', function (Builder $builder) {
            $builder->where('age', '>', 8);
        });
    } */


    //Local scope Leccion 04
    function scopeAgeGreaterThan($query, $age)
    {
        return $query->where('age', '>', $age);
    }

    //Local scope Leccion 04
    function scopeGender($query, $gender)
    {
        return $query->where('gender', $gender);
    }

    //Local scope Leccion 04
    function dogsForSpecialTreatment($gender)
    {
        return $this->AgeGreaterThan(6)->gender($gender);
    }

    //leccion 06 - Accesors
    function getNameAttribute($value)
    {
        return strtoupper($value);
    }

    function getIdWithNameAttribute($value)
    {
        return "{$this->id} : {$this->name}";
    }
}
