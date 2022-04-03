<?php
require_once 'classes.php';

final class MotorWay extends Highway
{
    protected int $nbLane = 4;
    protected int $maxSpeed = 130;

    public function addVehicle(Vehicle $vehicle): void
    {
        if (!$vehicle instanceof Skateboard && !$vehicle instanceof Bike) { 
            $this->currentVehicles[] = $vehicle;
        }
    }
}
