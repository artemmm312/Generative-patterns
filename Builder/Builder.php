<?php

namespace Builder;

//Общий интерфейс строителей
interface Builder
{
	public function producePart1(): void;

	public function producePart2(): void;

	public function producePart3(): void;
}
