<?php

namespace App\Casts;

use Illuminate\Support\Arr;
use InvalidArgumentException;
use App\Valuebjects\OptionsVO;
use Illuminate\Contracts\Database\Eloquent\CastsAttributes;
use Illuminate\Contracts\Database\Eloquent\SerializesCastableAttributes;

class ProductOptionsCast implements CastsAttributes
{
    /**
     * Cast the given value.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function get($model, $key, $value, $attributes)
    {
        return new OptionsVO(json_decode($value));
    }

    /**
     * Prepare the given value for storage.
     *
     * @param  \Illuminate\Database\Eloquent\Model  $model
     * @param  string  $key
     * @param  mixed  $value
     * @param  array  $attributes
     * @return mixed
     */
    public function set($model, $key, $value, $attributes)
    {
        if (!$value instanceof OptionsVO) {
            throw new InvalidArgumentException('The given value is not an OptionsVO instance.');
        }

        return [
            'options' => $value->toJson()
        ];
    }
}
