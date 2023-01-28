<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Php;

use Handler;

class Middleware {

    public function __construct(
        private Handler $handler
    )
    { }


    public function handle(Request $request)
    {
        $this->handler->handle($request);    
    }
}