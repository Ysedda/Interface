<?php
require_once 'HighWay.php';

final class PedestrianWay extends Highway
{
    protected int $nbLane = 1;
    protected int $maxSpeed = 10;

    public function addVehicle(Vehicle $vehicle):void
    {
        if ($vehicle instanceof Skateboard || $vehicle instanceof Bike) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
