<?php

use DesignPattern\Behavioral\ChainOfResponsibility\Php\Request;

abstract class Handler {

    public function __construct(
        protected Handler $next
    )
    { }

    public function handle(Request $request)
    {
        if($this->doHandle($request))
            return true;
        if(isset($this->next))
            $this->next->handle($request);
    }
    abstract public function doHandle(Request $request) : bool;

}