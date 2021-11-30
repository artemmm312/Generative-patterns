<?php

/* Одиночка — это порождающий паттерн проектирования, 
который гарантирует, что у класса есть только один экземпляр, 
и предоставляет к нему глобальную точку доступа. */

use Database\Database;

require __DIR__ . '/vendor/autoload.php';

function clientCode()
{
	$s1 = Database::getInstance();
	$s2 = Database::getInstance();
	if ($s1 === $s2) {
		echo "Синглтон работает =)";
	} else {
		echo "Синглтон не работает (=";
	}
}

clientCode();
