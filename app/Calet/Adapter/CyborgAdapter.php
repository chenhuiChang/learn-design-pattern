<?php

namespace App\Calet\Adapter;

class CyborgAdapter implements RobotInterface
{
    /**
     * @var Cyborg
     */
    private $cyborg;

    /**
     * RobotAdapter constructor.
     * @param $cyborg
     */
    public function __construct($cyborg)
    {
        $this->cyborg = $cyborg;
    }

    public function move()
    {
        $this->cyborg->walk();
    }

    public function attack()
    {
        $this->cyborg->fire();
    }

    public function named($name)
    {
        $this->cyborg->giveName($name);
    }
}
