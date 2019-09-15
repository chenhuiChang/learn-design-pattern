<?php

namespace App\Calet\Bridge;

class DVDDevice extends EntertainmentDevice
{

    /**
     * DVDDevice constructor.
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
        dump("Skip to Chapter");
    }

    public function buttonSixPressed()
    {
        dump("Skip to Next Chapter");
    }
}
