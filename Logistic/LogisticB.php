<?php

namespace Logistic;

use AirTransport\AirTransport, AirTransport\PlaneB;
use RoadTransport\RoadTransport, RoadTransport\TruckB;

//Конкретные фабрики
class LogisticB implements Logistic
{
	public function createPlane(): AirTransport
	{
		return new PlaneB;
	}
	public function createTruck(): RoadTransport
	{
		return new TruckB;
	}
}
