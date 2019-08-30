<?php

namespace App\Calet\Adapter;

class Cyborg
{
    private $name = 'NO NAME';

    public function giveName($name)
    {
        $this->name = $name;
        dump('Cyborg, your name is ' . $this->name);
    }

    public function walk()
    {
        dump($this->name . ' walks.');
    }

    public function fire()
    {
        dump($this->name . ' fire!');
    }
}
