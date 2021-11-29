<?php

namespace Builder;

use Product\Product2;

class Builder2 implements Builder
{
	private Product2 $product;

	public function __construct()
	{
		$this->reset();
	}
	public function reset(): void
	{
		$this->product = new Product2();
	}

	public function producePart1(): void
	{
		$this->product->numb += 10;
	}
	public function producePart2(): void
	{
		$this->product->numb += 100;
	}
	public function producePart3(): void
	{
		$this->product->numb += 1000;
	}

	public function getProduct(): Product2
	{
		$result = $this->product;
		$this->reset();
		return $result;
	}
}
