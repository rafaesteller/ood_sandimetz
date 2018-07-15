<?php

abstract class Bicycle
{
    private $size;
    private $chain;
    private $tireSize;

    public function __construct($size, $chain = '10-speed', $tireSize = '23')
    {
        $this->size = $size;
        $this->chain= $chain;
        $this->tireSize = $tireSize;

    }

    public function spares()
    {
     return ['chain' => $this->chain,
         'tireSize' => $this->tireSize,
        ];
    }
}