<?php

namespace Builder;

use Product\Product1;

class Builder1_1 implements Builder
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
		$this->product->parts[] = "PartD";
	}
	public function producePart2(): void
	{
		$this->product->parts[] = "PartE";
	}
	public function producePart3(): void
	{
		$this->product->parts[] = "PartF";
	}

	public function getProduct(): Product1
	{
		$result = $this->product;
		$this->reset();
		return $result;
	}
}
