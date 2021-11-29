<?php

namespace Logistic;

use Transport\Transport, Transport\Plane;

class AirLogistic extends Logistic
{
	public function getTransport(): Transport
	{
		return new Plane();
	}
}
