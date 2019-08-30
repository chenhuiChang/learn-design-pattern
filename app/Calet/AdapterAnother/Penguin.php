<?php

namespace App\Calet\AdapterAnother;

class Penguin implements Swimmer
{
    private $name;

    /**
     * Penguin constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    public function swim()
    {
        dump($this->name . ': IDF, I swim');
    }

    public function drink()
    {
        dump($this->name . ': Drinking more water is good');
    }
}
