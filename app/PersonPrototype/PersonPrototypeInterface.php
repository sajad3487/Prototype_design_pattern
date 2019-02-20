<?php

namespace App\PersonPrototype;

interface PersonPrototypeInterface
{
    public function getNIC();
    public function getName();
    public function getDob();
    public function __clone();
}