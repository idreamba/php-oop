<?php
// เป็นฟังก์ชันที่ถุฏเรียกใช้งานตอนที่มีการสร้าง object ขึ้นมา ทำงานครั้งเดียว ปกติ class จะมี constructor อยุ่แล้ว (default constructor) เพียงแต่จะมองไม่เห็น แต่สามารถนำมาแก้ไขได้

class LearnConstructor
{
    private $name;
    private $department;
    private $salary;

    public function __construct($name, $department, $salary)
    {
        // สร้าง constructor ขึ้นมา
        $this->name = $name;
        $this->department = $department;
        $this->salary = $salary;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function render()
    {
        echo "ชื่อ: " . $this->name . PHP_EOL;
        echo "แผนก: " . $this->name . PHP_EOL;
        echo "เงินเดือน: " . $this->name . PHP_EOL;
    }
}

$emp1 = new LearnConstructor("ดรีม", "บัญชี", 20000);
$emp1->render();

$emp1->setName("ส้ม");
$emp1->render();