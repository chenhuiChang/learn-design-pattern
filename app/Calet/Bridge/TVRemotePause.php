<?php

namespace App\Calet\Bridge;

class TVRemotePause extends RemoteButton
{

    public function buttonNinePressed()
    {
        dump("TV was Paused");
    }
}
