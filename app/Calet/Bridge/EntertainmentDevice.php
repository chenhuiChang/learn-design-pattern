<?php

namespace App\Calet\Bridge;

abstract class EntertainmentDevice
{
    public $deviceState;
    public $maxSetting;
    public $volumeLevel = 0;

    public abstract function buttonFivePressed();

    public abstract function buttonSixPressed();

    public function deviceFeedback()
    {
        if ($this->deviceState > $this->maxSetting || $this->deviceState < 0) {
            $this->deviceState = 0;
        }
        dump("On Channel " . $this->deviceState);
    }

    public function buttonSevenPressed()
    {
        $this->volumeLevel++;
        dump("Volume at " . $this->volumeLevel);
    }

    public function buttonEightPressed()
    {
        $this->volumeLevel--;
        dump("Volume at " . $this->volumeLevel);
    }

}
