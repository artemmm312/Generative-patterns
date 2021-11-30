<?php
/* Прототип — это порождающий паттерн проектирования, 
который позволяет копировать объекты, не вдаваясь в подробности их реализации. */

use Company\Company;
use Computer\Computer;

require __DIR__ . '/vendor/autoload.php';

function clientCode()
{
	$company = new Company("HP");
	$computer = new Computer($company, "ЭВМ-22", "AMD", "8Gb", "512Gb", "Radeon");
	$computer->addAccessories("Клавиатура");

	$computer->view();

	$clone = clone $computer;
	$clone->view();
	
}

clientCode();

