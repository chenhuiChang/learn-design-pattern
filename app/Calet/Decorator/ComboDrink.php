<?php

namespace App\Calet\Decorator;

class ComboDrink implements Meal
{
    /**
     * @var Meal
     */
    private $meal;

    /**
     * ComboDrink constructor.
     * @param Meal $meal
     */
    public function __construct(Meal $meal)
    {
        $this->meal = $meal;
    }

    public function getContent()
    {
        return "Black tea, " . $this->meal->getContent();
    }

    public function price()
    {
        return 5 + $this->meal->price();
    }
}
