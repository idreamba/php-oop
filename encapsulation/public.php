<?php

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
}

$emp1 = new Employee();
$emp1->name = "Dream";
$emp1->department = "Product Service";

echo "My name is ". $emp1->name."<br/>";
echo "Department is ". $emp1->department."<br/>";
