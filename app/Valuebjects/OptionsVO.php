<?php

namespace App\Valuebjects;

class OptionsVO
{
    protected const COLOR_HEX = [
        'rojo'  => '#FF0000',
        'verde' => '#00FF00',
        'azul'  => '#0000FF',
    ];

    public string $color;

    public function __construct($options)
    {
        $this->color = data_get($options, 'color');
    }
    public function colorHex()
    {
        return self::COLOR_HEX[$this->color];
    }
    public function toArray()
    {
        return [
            'color' => $this->color
        ];
    }

    public function toJson()
    {
        return json_encode($this->toArray());
    }
}
