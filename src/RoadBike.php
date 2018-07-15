<?php
/**
 * Created by PhpStorm.
 * User: rafa
 * Date: 15/07/18
 * Time: 19:53
 */

class RoadBike extends Bicycle
{

    private $tapeColor;

    public function __construct($size, $tapeColor)
    {
        $this->tapeColor = $tapeColor;
        parent::__construct($size);
    }

    public function spares()
    {
        return array_merge(parent::spares(), ['tapeColor' => $this->tapeColor]);

    }

    public function defaultTireSize()
    {
        return '23';
    }

}