<?php

namespace Builder;

use Product\Product1;

class Builder1 implements Builder
{
	private Product1 $product;

	public function __construct()
	{
		$this->reset();
	}
	public function reset(): void
	{
		$this->product = new Product1();
	}

	public function producePart1(): void
	{
		$this->product->parts[] = "PartA";
	}
	public function producePart2(): void
	{
		$this->product->parts[] = "PartB";
	}
	public function producePart3(): void
	{
		$this->product->parts[] = "PartC";
	}

	public function getProduct(): Product1
	{
		$result = $this->product;
		$this->reset();
		return $result;
	}
}
