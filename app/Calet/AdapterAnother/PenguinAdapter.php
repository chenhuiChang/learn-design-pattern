<?php

namespace App\Calet\AdapterAnother;

// Question: How can I use adaptor with implementing the Interface?

// class PenguinAdapter implements BirdInterface

class PenguinAdapter
{
    /**
     * @var Penguin
     */
    private $penguin;

    public function __construct(Penguin $penguin)
    {
        $this->penguin = $penguin;
    }

    public function fly()
    {
        $this->penguin->swim();
    }

    public function eat()
    {
        $this->penguin->drink();
    }
}
