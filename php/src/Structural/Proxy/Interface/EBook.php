<?php

namespace Imaarov\Patterns\Structural\Proxy\Interface;

interface EBookInterface {
    public function show() : void;
    public function getFileName() : string;
}