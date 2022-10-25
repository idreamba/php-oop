<?php

// Report all PHP errors
//error_reporting(E_ALL);

/***
 * public เข้าถึงข้อมูลได้ทุกที่ไม่จำกัด
 * protected เข้าถึงได้ในคลาสแม่ และคลาสลูกที่ใช้การสืบทอดคุณสมบัติ (Inherite) เท่านั้น
   เหมือนเฟสบุค ที่ให้เพื่อนเราเห็นได้ แต่คนอื่นที่ไม่ใช่เพื่อนไม่เห็น
 * private เข้าถึงได้เฉพาะคลาสแม่ เหมือนเฟสบุคที่ตั้งค่าเป็นส่วนตัว มีเฉพาะเราที่เห็นเท่านั้น
***/

class Employee{
	// attribute
	public $name;
	public $department;
	// ปรับเป็น private แล้ว object จะไม่สามารถแก้ไขข้อมูลได้ตรงๆ
	//private $name;
}

// สร้าง object คนที่ 1 จากคลาส Employeee
$emp1 = new Employee();
$emp1->name = "Dream";
// ถ้ากำหนด data แบบ public มันสามารถเข้ามาเปลี่ยนค่าได้เลย
$emp1->name = "XXX";
$emp1->department = "Product Service";

echo "My name is ". $emp1->name."<br/>";
echo "Department is ". $emp1->department."<hr/>";

// สร้าง object คนที่ 2 จากคลาส Employeee
$emp2 = new Employee();
$emp2->name = "Som";
$emp2->department = "IT Support";

echo "My name is ". $emp2->name."<br/>";
echo "Department is ". $emp2->department."<br/>";
