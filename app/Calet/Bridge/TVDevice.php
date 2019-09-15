<?php

namespace App\Calet\Bridge;

class TVDevice extends EntertainmentDevice
{

    /**
     * TVDevice constructor.
     * @param $newDeviceState
     * @param $newMaxSetting
     */
    public function __construct($newDeviceState, $newMaxSetting)
    {
        $this->deviceState = $newDeviceState;
        $this->maxSetting = $newMaxSetting;
    }

    public function buttonFivePressed()
    {
        dump("Channel Down");
        $this->deviceState--;
    }

    public function buttonSixPressed()
    {
        dump("Channel Up");
        $this->deviceState++;
    }
}
