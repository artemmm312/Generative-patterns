<?php

namespace Logistic;

use Transport\Transport, Transport\Truck;

class RoadLogistic extends Logistic
{
	public function getTransport(): Transport
	{
		return new Truck();
	}
}
