<?php

namespace Director;

use Builder\Builder;

//Директор
class Director
{
	private Builder $builder;

	public function setBuilder(Builder $builder): void
	{
		$this->builder = $builder;
	}

	public function buildMinimalViableProduct(): void
	{
		$this->builder->producePart1();
	}

	public function buildFullFeaturedProduct(): void
	{
		$this->builder->producePart1();
		$this->builder->producePart2();
		$this->builder->producePart3();
	}
}
