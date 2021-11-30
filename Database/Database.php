<?php

namespace Database;

class Database
{
	private static $instances;

	//Конструктор Одиночки всегда должен быть скрытым, чтобы предотвратить создание объекта через оператор new.
	private function __construct()
	{
	}

	//Одиночки не должны быть клонируемыми.
	private function __clone()
	{
	}

	//Одиночки не должны быть восстанавливаемыми из строк.
	public function __wakeup()
	{
		throw new \Exception("Cannot unserialize a singleton.");
	}

	public static function getInstance(): Database
	{
		if (!isset(self::$instances)) {
			self::$instances = new static();
		}
		return self::$instances;
	}

	public function query($sql)
	{
		//...
	}
}
