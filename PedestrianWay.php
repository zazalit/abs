<?php
require 'HighWay.php';

final class PedestrianWay extends HighWay
{

    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Bicycle) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}