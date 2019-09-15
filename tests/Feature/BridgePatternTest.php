<?php

namespace Tests\Feature;

use App\Calet\Bridge\DVDDevice;
use App\Calet\Bridge\DVDRemote;
use App\Calet\Bridge\TVDevice;
use App\Calet\Bridge\TVRemoteMute;
use App\Calet\Bridge\TVRemotePause;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BridgePatternTest extends TestCase
{
    /**
     * @doesNotPerformAssertions
     */
    public function test_device_initiated()
    {
        $theTV1 = new TVRemoteMute(new TVDevice(1, 200));
        $theTV2 = new TVRemotePause(new TVDevice(1, 200));

        dump("test TV with Mute");
        $theTV1->buttonFivePressed();
        $theTV1->buttonSixPressed();
        $theTV1->buttonNinePressed();
        $theTV1->deviceFeedback();

        dump("");
        dump("test TV with Pause");
        $theTV2->buttonFivePressed();
        $theTV2->buttonSixPressed();
        $theTV2->buttonNinePressed();
        $theTV2->deviceFeedback();
    }

    /**
     * @doesNotPerformAssertions
     */
    public function test_different_device()
    {
        dump("");
        dump("test DVD");
        $theDVD = new DVDRemote(new DVDDevice(1, 14));
        $theDVD->buttonFivePressed();
        $theDVD->buttonSixPressed();
        $theDVD->buttonNinePressed();
    }
}
