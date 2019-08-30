<?php

namespace App\Calet\AdapterAnother;

// Extending the original Penguin class
class ExPenguinAdapter extends Penguin implements BirdInterface
{
    /**
     * @var Swimmer
     */
    private $swimmer;
    protected $name;

    public function __construct($name)
    {
        $this->swimmer = new parent($name);
        $this->name = $name;
    }

    public function fly()
    {
        $this->swimmer->swim();
    }

    public function eat()
    {
        $this->swimmer->drink();
    }
}
