<?php

namespace Imaarov\Patterns\Behavioral\ChainOfResponsibility\Middleware;

use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Handler;
use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Request;

class Loggin extends Handler {

    /**
     * handle next handler
     *
     * @param Handler|null $next
     */
    public function __construct(?Handler $next)
    {
        $this->next = $next;
    }

    /**
     * loggin functionality
     *
     * @param Request $request
     * @return void
     */
    public function loggin(Request $request) : void
    {
        //TODO loggin functionality
    }

    /**
     * handler of entry request
     *
     * @param Request $request
     * @return boolean
     */
    public function doHandle(Request $request): bool
    {
        $jwt = $request->getJWT();
        $isValid =  $request->getType() == 'Admin'
                    && isset($jwt)
                    && $request->getToken() == '123Admin456';
        echo "\nAuthenticate\n";
        return $isValid;
    }
}