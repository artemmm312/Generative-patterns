<?php

namespace Company;

use Computer\Computer;

class Company
{
	private $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function addComputer(Computer $computer)
	{
		$this->computers = $computer;
	}
}