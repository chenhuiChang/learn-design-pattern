<?php

namespace Tests\Feature;

use App\Calet\Decorator\ComboDrink;
use App\Calet\Decorator\ComboSideDish;
use App\Calet\Decorator\FriedChicken;
use Tests\TestCase;

class DecoratorPatternTest extends TestCase
{

    public function test_combo_with_drink()
    {
        $friedChickenWithDrink = new ComboDrink(new FriedChicken());
        $this->assertEquals('Black tea, Fried Chicken', $friedChickenWithDrink->getContent());
        $this->assertEquals(15, $friedChickenWithDrink->price());
    }

    public function test_combo_with_side_dish()
    {
        $friedChickenWithDrink = new ComboSideDish(new FriedChicken());
        $this->assertEquals('French fries, Fried Chicken', $friedChickenWithDrink->getContent());
        $this->assertEquals(17, $friedChickenWithDrink->price());
    }

    public function test_combo_with_side_dish_and_drink()
    {
        $friedChickenWithDrink = new ComboDrink(new ComboSideDish(new FriedChicken()));
        $this->assertEquals('Black tea, French fries, Fried Chicken', $friedChickenWithDrink->getContent());
        $this->assertEquals(22, $friedChickenWithDrink->price());
    }

}
