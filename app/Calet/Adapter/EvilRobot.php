<?php

namespace App\Calet\Adapter;

class EvilRobot implements RobotInterface
{
    private $name = 'NO NAME';

    public function move()
    {
        dump('Evil Robot, ' . $this->name . ', walks.');
    }

    public function attack()
    {
        dump('Evil Robot, ' . $this->name . ', attacks.');
    }

    public function named($name)
    {
        $this->name = $name;
        dump('Evil Robot\'s name is ' . $this->name);
    }
}
