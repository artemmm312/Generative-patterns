<?php

namespace Logistic;

use AirTransport\AirTransport, \AirTransport\PlaneA;
use RoadTransport\RoadTransport, \RoadTransport\TruckA;

//Конкретные фабрики
class LogisticA implements Logistic
{
	public function createPlane(): AirTransport
	{
		return new PlaneA;
	}
	public function createTruck(): RoadTransport
	{
		return new TruckA;
	}
}