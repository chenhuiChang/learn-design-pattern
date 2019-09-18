<?php

namespace App\Calet\BridgeVer2;

abstract class View
{
    /**
     * @var ResourceInterface
     */
    protected $resource;

    public function __construct(ResourceInterface $resource) {

        $this->resource = $resource;
    }
    abstract public function show();
}
