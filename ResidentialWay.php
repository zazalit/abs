<?php

require 'HighWay.php';

final class ResidentialWay extends HighWay
{

    public function __construct($nbLane, $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }

    public function addVehicle(object $vehicle)
    {
        if ($vehicle instanceof Vehicle) {
            $this->setCurrentVehicles($vehicle);
        }
    }
}
