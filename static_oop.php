<?php

class personal{
	 public static $name = 'palash';
	 public static $age = 30;
	 public static function show(){
		echo self::$age;
	}
}

echo personal::$name."<br>";
personal::show();
?>