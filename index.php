<?php

/* Фабричный метод — это порождающий паттерн проектирования, 
который определяет общий интерфейс для создания объектов в суперклассе, 
позволяя подклассам изменять тип создаваемых объектов. */

use Logistic\Logistic, Logistic\AirLogistic, Logistic\RoadLogistic;

require __DIR__ . '/vendor/autoload.php';

//Тест
function test(Logistic $logistic, string $cargo): void
{
	$logistic->deliverCargo($cargo);
}

test(new AirLogistic, 'Воздушная почта');

test(new RoadLogistic, 'Наземная почта');