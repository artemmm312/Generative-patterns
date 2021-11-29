<?php

/* Строитель — это порождающий паттерн проектирования,
 который позволяет создавать сложные объекты пошагово.
 Строитель даёт возможность использовать один и тот же код строительства
 для получения разных представлений объектов. */

use Builder\Builder1, Builder\Builder1_1, Builder\Builder2;
use Director\Director;

require __DIR__ . '/vendor/autoload.php';

function clientCode(Director $director)
{
	$builder1 = new Builder1();
	$director->setBuilder($builder1);

	echo "Продукт1 Минимум:<br>";
	$director->buildMinimalViableProduct();
	$builder1->getProduct()->listParts();

	echo "Продукт1 Максимум:<br>";
	$director->buildFullFeaturedProduct();
	$builder1->getProduct()->listParts();

	$builder2 = new Builder2();
	$director->setBuilder($builder2);
	echo "Продукт2 Максимум: <br>";
	$director->buildFullFeaturedProduct();
	$builder2->getProduct()->result();

	echo "<br>";

	//Строитель можно использовать без класса Директор.
	echo "Кастомный Продукт1:<br>";
	$builder1->producePart1();
	$builder1->producePart3();
	$builder1->getProduct()->listParts();
}

$director = new Director();
clientCode($director);
