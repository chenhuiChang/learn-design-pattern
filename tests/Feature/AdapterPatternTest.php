<?php

namespace Tests\Feature;

use App\Calet\Adapter\Cyborg;
use App\Calet\Adapter\EvilRobot;
use App\Calet\Adapter\CyborgAdapter;
use Tests\TestCase;

class AdapterPatternTest extends TestCase
{

    /**
     * @doesNotPerformAssertions
     */
    public function test_normal_robot()
    {
        $cyborgNeo = new Cyborg();
        $evilMax = new EvilRobot();
        $robotAdapter = new CyborgAdapter(new Cyborg());

        dump('The Cyborg');
        $cyborgNeo->giveName('Neo');
        $cyborgNeo->walk();
        $cyborgNeo->fire();

        dump('The EvilRobot');
        $evilMax->named('Max');
        $evilMax->move();
        $evilMax->attack();

        dump('Cyborg with Adaptor');
        $robotAdapter->named('Frank');
        $robotAdapter->move();
        $robotAdapter->attack();
    }

}
