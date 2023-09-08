<?php 

class personal{
	protected $name;
	protected $age;

	public function __construct($n, $a){
		$this->name = $n;
		$this->age = $a;
	}

	
}

class chl extends personal{
	public function show(){
		echo "My Name is: ".$this->name." and My age is: ".$this->age."<br>";
	}
}

$object = new chl("Bahauddin", 30);
$object->show();



?>