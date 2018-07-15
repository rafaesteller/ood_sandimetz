<?php
/**
 * Created by PhpStorm.
 * User: rafa
 * Date: 15/07/18
 * Time: 19:30
 */

class Driver implements Preparer
{

    public function prepareTrip(Trip $trip)
    {
        foreach ($trip->vehicles() as $vehicle) {
            $this->gasUp($vehicle);
            $this->fillWaterTank($vehicle);
        }
    }

    private function gasUp(Vehicle $vehicle)
    {

    }

    private function fillWaterTank(Vehicle $vehicle)
    {

    }

}
