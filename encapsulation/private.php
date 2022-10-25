<?php

class Employee
{
	// attribute
	private $name;
	private $department;
	private $salary;

	// กาาเข้าถึงข้อมูล private จะต้องใช้ method
	public function setEmpName($name)
	{
		$this->name = $name;
	}

	public function setDepartment($department)
	{
		$this->department = $department;
	}

	public function showData()
	{
	/** ถ้าใช้เครื่องหมาย "" เช่น "display is $var"
		* private.phpสามารถใส่ตัวแปร php เข้าไปในนี้ได้เลย
		* แต่ถ้าไม่ใช้ ให้ใช้ . คั่นระหว่างตัวแปรก้บข้อความ
	**/
		echo "My name is $this->name <br/>";
		echo "Department is $this->department <br/>";
		echo "Salary is $this->salary <hr/>";
	}

	public function setSalary($salary){
		$this->salary = $salary;
	}
} // end class

$emp1 = new Employee();
$emp1->setEmpName("Komkrit Aree");
$emp1->setDepartment("IT Support");
$emp1->setSalary(20000);
$emp1->showData();

$emp2 = new Employee();
$emp2->setEmpName("Natawan Limsakul");
$emp2->setDepartment("Content");
$emp2->setSalary(15000);
$emp2->showData();
