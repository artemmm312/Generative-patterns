<?php

namespace Computer;

use Prototype\Prototype;
use Company\Company;

//Конкретный прототип
class Computer implements Prototype
{
	private Company $company;
	private string $model;
	private string $cpu;
	private string $ram;
	private string $rom;
	private string $video_card;
	private array $accessories = [];

	public function __construct(Company $company, string $model, string $cpu, string $ram, string $rom, string $video_card)
	{
		$this->company = $company;
		$this->company->addComputer($this);
		$this->model = $model;
		$this->cpu = $cpu;
		$this->ram = $ram;
		$this->rom = $rom;
		$this->video_card = $video_card;
	}

	public function addAccessories(string $accessory): void
	{
		$this->accessories = $accessory;
	}

	public function __clone()
	{
		$this->model = "Copy of model " . $this->model;
		$this->company->addComputer($this);
		$this->accessories = [];
	}

	public function view(): void
	{
		echo $this->model . "<br>";
		echo $this->cpu . "<br>";
		echo $this->ram . "<br>";
		echo $this->rom . "<br>";
		echo $this->video_card . "<br>";
	}
}