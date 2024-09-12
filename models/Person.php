<?php

class Person
{
    public $name;
    
    public function greet()
    {
        echo "Hello {$this->name}";
    }
}