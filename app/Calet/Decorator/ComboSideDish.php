<?php

namespace App\Calet\Decorator;

class ComboSideDish implements Meal
{
    /**
     * @var Meal
     */
    private $meal;

    /**
     * ComboOne constructor.
     * @param Meal $meal
     */
    public function __construct(Meal $meal)
    {
        $this->meal = $meal;
    }

    public function getContent()
    {
        return "French fries, " . $this->meal->getContent();
    }

    public function price()
    {
        return 7 + $this->meal->price();
    }
}
