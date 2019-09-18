<?php

namespace App\Calet\BridgeVer2;

class BookResource implements ResourceInterface
{

    /**
     * @var Book
     */
    private $book;

    /**
     * BookResource constructor.
     * @param $book
     */
    public function __construct(Book $book)
    {
        $this->book = $book;
    }


    public function snippet()
    {
        $this->book->coverText();
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
