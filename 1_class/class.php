<?php

// function VS class

// function bmi
function bmi($weight, $height)
{
	return $weight / ($height * $height);
}
// call function
// $bmi1 = bmi(60, 1.7);
// echo "BMI (fn) คือ $bmi1" . PHP_EOL;

// function profile: firstname , lastname , age
function profile($firstname, $lastname, $age)
{
	return "ชื่อ $firstname $lastname อายุ $age ปี";
}

// user profile & bmi
$john_profile = profile("John", "Doe", 30);
$john_bmi = bmi(60, 1.7);
echo $john_profile . " มีค่า BMI คือ $john_bmi" . PHP_EOL;

$peter_profile = profile("Peter", "Jackson", 30);
$peter_bmi = bmi(60, 1.7);
echo $peter_profile . " มีค่า BMI คือ $peter_bmi" . PHP_EOL;

echo "============================" . PHP_EOL;

// class กลุ่มของ concept ที่มีความเกี่ยวข้องกัน
class Healthy
{
	// attribute
	public $firstname;
	public $lastname;
	public $age;
	public $weight;
	public $height;

	// method
	function __construct($firstname, $lastname, $age, $weight, $height)
	{
		// รับข้อมูลจาก parameter มาเก็บใน attribute ทำงานอัตโนมัติในครั้งแรก
		$this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->age = $age;
		$this->weight = $weight;
		$this->height = $height;
	}

	public function bmi()
	{
		echo "ชื่อ $this->firstname $this->lastname อายุ $this->age ปี";
		echo "มีค่า BMI คือ" . $this->weight / ($this->height * $this->height);
	}

	public function profile()
	{
		$this->bmi();
	}
}
// create object
$frank = new Healthy("Frank", "Style", 30, 60, 1.7);
echo $frank->profile() . PHP_EOL;
