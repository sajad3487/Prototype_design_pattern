<?php
namespace App\PersonPrototype;
require_once __DIR__ . "/PersonPrototypeInterface.php";
abstract class Person implements PersonPrototypeInterface {
    protected $nic;
    protected $name;
    protected $dob;

    public function __construct($nic, $name, $dob) {
        $this->nic = $nic;
        $this->name = $name;
        $this->dob = $dob;
    }

    public function getNIC() {
        return $this->nic;
    }

    public function getName() {
        return $this->name;
    }

    public function getDob() {
        return $this->dob;
    }

    public abstract function toString();

    public function __clone() {
        return new static($this->nic, $this->name, $this->dob);
    }
}