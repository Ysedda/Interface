<?php
require_once 'HighWay.php';

final class PedestrianWay extends Highway
{
    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicle(Vehicle $vehicle):void
    {
        if ($vehicle instanceof Skateboard || $vehicle instanceof Bike) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
