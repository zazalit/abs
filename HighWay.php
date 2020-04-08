
<?php

abstract class HighWay
{

protected $currentVehicles;
protected $nbLane;
protected $maxSpeed;


public function getCurrentVehicles()
{
return $this->currentVehicles;
}

public function setCurrentVehicles($currentVehicles)
{
$this->currentVehicles = $currentVehicles;
return $this;
}


public function getNbLane()
{
return $this->nbLane;
}
public function setNbLane($nbLane)
{
$this->nbLane = $nbLane;
return $this;
}


public function getMaxSpeed()
{
return $this->maxSpeed;
}

public function setMaxSpeed($maxSpeed)
{
$this->maxSpeed = $maxSpeed;
return $this;
}


abstract public function addVehicle(object $vehicle);

}