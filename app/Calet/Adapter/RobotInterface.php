<?php

namespace App\Calet\Adapter;

interface RobotInterface
{
    public function named($name);
    public function move();
    public function attack();
}
