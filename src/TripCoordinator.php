<?php

class TripCoordinator implements Preparer
{

    public function prepareTrip(Trip $trip)
    {
        $this->buyFood($trip->customers());
    }

    private function buyFood(array $customers)
    {

    }

}