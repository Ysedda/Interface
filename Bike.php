<?php

require_once 'Vehicle.php';

class Bike extends Vehicle implements Lightable
{
    public function switchOn(): bool
    {
        if ($this->getCurrentSpeed() > 10) {
            return true;
        }
    }

    public function switchOff(): bool
    {
        return false;
    }
}
