<?php

namespace App\Calet\BridgeVer2;

class ArtistResource implements ResourceInterface
{
    /**
     * @var Artist
     */
    private $artist;

    /**
     * ArtistResource constructor.
     * @param Artist $artist
     */
    public function __construct(Artist $artist)
    {
        $this->artist = $artist;
    }

    public function snippet()
    {
        $this->artist->bio();
    }

    public function image()
    {
        // TODO: Implement image() method.
    }

    public function title()
    {
        // TODO: Implement title() method.
    }

    public function url()
    {
        // TODO: Implement url() method.
    }
}
