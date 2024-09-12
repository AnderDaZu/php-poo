<?php

interface StoreInterface
{
    public function get(); // función que se debe declarar si se implementa esta interface
    public function set($value); // función que se debe declarar si se implementa esta interface
    public function delete(); // función que se debe declarar si se implementa esta interface
}