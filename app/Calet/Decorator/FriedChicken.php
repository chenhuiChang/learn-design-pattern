<?php

namespace App\Calet\Decorator;

class FriedChicken implements Meal
{

    public function getContent()
    {
        return "Fried Chicken";
    }

    public function price()
    {
        return 10;
    }
}
