<?php

require 'HighWay.php';

final class MotorWay extends HighWay
{

    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Car) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}