<?php

class Genre
{
    public $name;
    public $subgenre;
    public $influences;

    public function __construct($name)
    {
        $this->name = $name;
    }
}
