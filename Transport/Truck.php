<?php

namespace Transport;

class Truck implements Transport
{
	public function load(): void
	{
		echo "The truck is loading...";
	}

	public function deliver(string $cargo): void
	{
		echo "The truck delivering $cargo ";
	}

	public function unload(): void
	{
		echo "The truck unload <br>";
	}
}
