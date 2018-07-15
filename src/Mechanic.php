<?php

class Mechanic implements Preparer
{


    public function prepareTrip(Trip $trip)
    {
        foreach($trip->bicycles() as $bicycle)
        {
            $this->prepareBicycle($bicycle);
        }

    }

    private function prepareBicycle(Bicycle $bicycle)
    {
        //todo
    }

}