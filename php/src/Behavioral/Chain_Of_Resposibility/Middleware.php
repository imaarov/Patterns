<?php

namespace Imaarov\Patterns\Behavioral\ChainOfResponsibility;

use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Handler;
use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Request;

class Middleware {

    /**
     *
     *
     * @param Handler $handler
     */
    public function __construct(
        private Handler $handler
    )
    { }


    /**
     * handler function
     *
     * @param Request $request
     * @return void
     */
    public function handle(Request $request)
    {
        $this->handler->handle($request);    
    }
}