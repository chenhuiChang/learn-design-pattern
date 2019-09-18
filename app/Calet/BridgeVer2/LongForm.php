<?php

namespace App\Calet\BridgeVer2;

class LongForm extends View
{
    public function show()
    {
        $this->resource->title();
        $this->resource->snippet();
        $this->resource->image();
    }
}
