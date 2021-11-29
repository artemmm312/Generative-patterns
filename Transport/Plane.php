<?php

namespace Transport;

class Plane implements Transport
{
	public function load(): void
	{
		echo "The plane is loading...";
	}

	public function deliver(string $cargo): void
	{
		echo "The plane delivering $cargo ";
	}

	public function unload(): void
	{
		echo "The plane unload <br>";
	}
}
