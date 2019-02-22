<?php
namespace App\PersonPrototype;
require_once __DIR__ . "/Person.php";

namespace App\PersonPrototype;

class Student extends Person {
    public $studentId;

    public function __construct($nic, $name, $dob, $studentId) {
        parent::__construct($nic, $name, $dob);
        $this->studentId = $studentId;
    }

    public function getStudentID() {
        return $this->studentId;
    }

    public function toString() {
        return "Student: {NIC: " . $this->nic . ", Name: " . $this->name . ", DoB: " . $this->dob . ", Student ID: " . $this->studentId . "}";
    }
    public function __clone() {
        return new static($this->nic, $this->name, $this->dob,$this->studentId);
    }
}