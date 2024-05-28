<?php

namespace Imaarov\Patterns\Behavioral\ChainOfResponsibility;

use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Request;

abstract class Handler {

    /**
     * getting the next handler
     *
     * @param Handler $next
     */
    public function __construct(
        protected Handler $next
    )
    { }

    /**
     * handle the request and specify if its authorizable or not
     *
     * @param Request $request
     * @return void
     */
    public function handle(Request $request) : ?bool
    {
        if($this->doHandle($request))
            return true;
        if(isset($this->next))
            $this->next->handle($request);
    }
    abstract public function doHandle(Request $request) : bool;

}