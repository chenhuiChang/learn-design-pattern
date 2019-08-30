<?php

namespace App\Calet\AdapterAnother;

class Pigeon implements BirdInterface
{

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function fly()
    {
        dump($this->name . ' is flying.');
    }

    public function eat()
    {
        dump($this->name . ' eat a bug.');
    }
}
