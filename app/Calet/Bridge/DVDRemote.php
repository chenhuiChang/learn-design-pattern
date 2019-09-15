<?php

namespace App\Calet\Bridge;

class DVDRemote extends RemoteButton
{

    private $play = true;

    public function buttonNinePressed()
    {
        $this->play = !$this->play;
        if ($this->play) {
            dump("DVD is Playing");
        } else {
            dump("DVD is not Playing");
        }
    }
}
