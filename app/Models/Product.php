<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Casts\ProductOptionsCast;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'active', 'options'
    ];

    protected $casts = [
        'active'  => 'boolean',
        'options' => ProductOptionsCast::class,
    ];

    //Accesors
    public function getFormattedPriceAttribute()
    {
        return number_format($this->convertedPrice, 2, ',', '.');
    }
    public function getConvertedPriceAttribute()
    {
        return  $this->convertPrice($this->price);
    }
    private function convertPrice(float $price): float
    {
        //lógica para determinar preferencias
        $rate = 3;

        //conversión de precio
        return $price * $rate;
    }

    //Mutators
    public function setNameAttribute($value)
    {
        $this->slug = Str::slug($value);
        return $this->attributes['name'] = strtoupper($value);
    }
}
