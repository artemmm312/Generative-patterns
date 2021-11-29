<?php

namespace Product;

class Product1
{
	public array $parts = [];

	public function listParts(): void
	{
		echo "Product parts: " . implode(', ', $this->parts) . "<br>";
	}
}
