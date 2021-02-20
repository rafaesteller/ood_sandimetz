<?php

class MountainBike extends Bicycle
{
    private $frontShock;
    private $rearShock;

    public function __construct($size, $frontShock, $rearShock)
    {
        $this->frontShock = $frontShock;
        $this->rearShock = $rearShock;
        parent::__construct($size);
    }

    public function spares()
    {
        return array_merge(
            parent::spares(),
            [
                'frontShock' => $this->frontShock,
                'rearShock' => $this->rearShock
            ]
        );
    }

    public function defaultTireSize()
    {
        return '2.1';
    }
}