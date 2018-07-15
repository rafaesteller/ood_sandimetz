<?php

class Bicycle
{
    private $size;
    private $tapeColor;

    public function __construct($size, $tapeColor)
    {
        $this->size = $size;
        $this->tapeColor = $tapeColor;
    }

    public function spares()
    {
     return ['chain' => '10-speed',
         'tireSize' => '23',
         'tapeColor' => $this->tapeColor];
    }
}