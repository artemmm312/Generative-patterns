<?php

namespace Logistic;

use AirTransport\AirTransport;
use RoadTransport\RoadTransport;

//Абстрактная фабрика
interface Logistic
{
	public function createPlane(): AirTransport;
	public function createTruck(): RoadTransport;
}
