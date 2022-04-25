<?php
require_once 'Vehicle.php';

class Car extends Vehicle implements Lightable
{
    public function switchOn(): bool
    {
        return true;
    }

    public function switchOff(): bool
    {
        return false;
    }
}
