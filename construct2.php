<?php 

class personal{
	public $name;
	public $age;

	public function __construct($n, $a){
		$this->name = $n;
		$this->age = $a;
	}

	public function show(){
		echo "My Name is: ".$this->name." and My age is: ".$this->age."<br>";
	}
}

$object = new personal("Bahauddin", 30);
$object->show();

$obj = new personal("Habib", 25);
$obj->show();



?>