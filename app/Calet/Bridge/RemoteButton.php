<?php

namespace App\Calet\Bridge;

abstract class RemoteButton
{
    /**
     * @var EntertainmentDevice
     */
    private $device;

    /**
     * RemoteButton constructor.
     * @param EntertainmentDevice $device
     */
    public function __construct(EntertainmentDevice $device)
    {
        $this->device = $device;
    }

    public function buttonFivePressed()
    {
        $this->device->buttonFivePressed();
    }

    public function buttonSixPressed()
    {
        $this->device->buttonSixPressed();
    }

    public function deviceFeedback()
    {
        $this->device->deviceFeedback();
    }

    public abstract function buttonNinePressed();
}
