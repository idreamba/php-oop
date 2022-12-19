<?php
// create class
class Employee{
    function sayHi(){
        echo nl2br("Hello World".PHP_EOL);
        echo "คมกริช อารีย์";
        echo "คมกริช อารีย์";
    }
} // จบการทำงาน

// create object
$obj = new Employee();
$obj->sayHi();
