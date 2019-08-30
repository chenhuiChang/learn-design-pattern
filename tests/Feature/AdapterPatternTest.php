<?php

namespace Tests\Feature;

use App\Calet\Adapter\Cyborg;
use App\Calet\Adapter\EvilRobot;
use App\Calet\Adapter\CyborgAdapter;
use App\Calet\AdapterAnother\PenguinAdapter;
use App\Calet\AdapterAnother\Penguin;
use App\Calet\AdapterAnother\Pigeon;
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


    /**
     * @doesNotPerformAssertions
     */
    public function test_adapter_interface_has_constructor()
    {
        $penguinSam = new Penguin('Sam');
        $pigeonJeff = new Pigeon('Jeff');
        $penguinAdapter = new PenguinAdapter(new Penguin('John'));

        dump('The Penguin');
        $penguinSam->swim();
        $penguinSam->drink();

        dump('The Pigeon');
        $pigeonJeff->fly();
        $pigeonJeff->eat();

        dump('Penguin with Adaptor');
        $penguinAdapter->fly();
        $penguinAdapter->eat();
    }

}
