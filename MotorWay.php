<?php
require_once 'classes.php';

final class MotorWay extends Highway
{
    public function __construct()
    {
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicle(Vehicle $vehicle):void
    {
        if (!$vehicle instanceof Skateboard && !$vehicle instanceof Bike) { 
            $this->currentVehicles[] = $vehicle;
        }
    }
}
