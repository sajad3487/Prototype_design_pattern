<?php
namespace App;
require_once __DIR__ . "/PersonPrototype/PersonRegistry.php";
use App\PersonPrototype\PersonRegistry;

$student = PersonRegistry::createPerson("Student", "123456789", "John Doe", "1990-01-01");
$student->studentId = "ABC123";

$clonedStudent = PersonRegistry::getPerson($student);

$employee = PersonRegistry::createPerson("Employee", "987654321", "Jane Doe", "1995-01-01");
$employee->employeeId = "DEF456";
$employee->salary = 100000.00;

$clonedEmployee = PersonRegistry::getPerson($employee);

var_dump($student );
echo  "<br>";
var_dump($clonedStudent );
echo  "<br>";
var_dump($employee );
echo  "<br>";
var_dump($clonedEmployee );
echo  "<br>";