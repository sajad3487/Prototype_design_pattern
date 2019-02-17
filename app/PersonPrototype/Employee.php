<?php

namespace App\PersonPrototype;
require_once __DIR__ . "/Student.php";

class Employee extends Person {
    public $employeeId;
    public $salary;

    public function __construct($nic, $name, $dob, $employeeId, $salary) {
        parent::__construct($nic, $name, $dob);
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }

    public function getEmployeeID() {
        return $this->employeeId;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function toString() {
        return "Employee: {NIC: " . $this->nic . ", Name: " . $this->name . ", DoB: " . $this->dob . ", Employee ID: " . $this->employeeId . ", Salary: " . $this->salary . "}";
    }
    public function __clone() {
        return new static($this->nic, $this->name, $this->dob,$this->employeeId,$this->salary);
    }
}
