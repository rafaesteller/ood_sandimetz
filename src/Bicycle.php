<?php

abstract class Bicycle
{
    private $size;

    public function __construct($size)
    {
        $this->size = $size;

    }

    public function spares()
    {
     return ['chain' => '10-speed',
         'tireSize' => '23',
        ];
    }
}