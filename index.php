<?php

/* Абстрактная фабрика — это порождающий паттерн проектирования, 
который позволяет создавать семейства связанных объектов, 
не привязываясь к конкретным классам создаваемых объектов. */

use Logistic\LogisticA, Logistic\LogisticB;

require __DIR__ . '/vendor/autoload.php';

function clientCode($country): void
{
	if($country == 'Беларусь')
	{
		$transport = new LogisticB();
		$transport->createPlane()->AirDelivery();
		$transport->createTruck()->RoadDelivery();
	}
	elseif($country == 'Америка')
	{
		$transport = new LogisticA();
		$transport->createPlane()->AirDelivery();
		$transport->createTruck()->RoadDelivery();
	}
	else echo "В вашей стране нет нашей доставки(=";
}

$country = 'Беларусь';

clientCode($country);