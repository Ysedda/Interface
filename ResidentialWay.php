<?php
require_once 'HighWay.php';

final class ResidentialWay extends Highway
{
    public function __construct()
    {
        $this->nbLane = 2;
        $this->maxSpeed = 50;
    }

    public function addVehicle(Vehicle $vehicle):void
    {
        if ($vehicle instanceof Vehicle) {
            $this->currentVehicles[] = $vehicle;
        }
    }
}
