<?php
/**
 * Created by PhpStorm.
 * User: rafa
 * Date: 15/07/18
 * Time: 19:27
 */

class Trip
{

    private $bicycles;
    private $customers;
    private $vehicle;

    public function __construct(array $bicycles, array $customers, Vehicle $vehicle)
    {
        $this->bicycles = $bicycles;
        $this->customers = $customers;
        $this->vehicle = $vehicle;
    }

    public function prepare($preparers)
    {
        foreach($preparers as $preparer)
        {
            $preparer->prepareTrip(self);
        }
    }

    public function bicycles()
    {
        return $this->bicycles;
    }

}