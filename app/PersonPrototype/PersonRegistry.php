<?php

namespace App\PersonPrototype;
require_once __DIR__ . "/Student.php";
require_once __DIR__ . "/Employee.php";
class PersonRegistry {
    public static function createPerson($type, $nic, $name, $dob) {
        switch ($type) {
            case "Student":
                $person = new Student($nic, $name, $dob, "afdasdfsd");
                break;
            case "Employee":
                $person = new Employee($nic, $name, $dob, "asdafsfa", 0.0);
                break;
            default:
                throw new Exception("Invalid person type");
        }
        return $person;
    }

    public static function getPerson(Person $person) {
        // Clone using prototype design pattern
        return clone $person;
    }
}