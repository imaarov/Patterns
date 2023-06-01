<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Php\Middleware;

use DesignPattern\Behavioral\ChainOfResponsibility\Php\Request;
use Handler;

class Authenticator extends Handler {

    public function __construct(Handler $next)
    {
        $this->next = $next;
    }

    public function authenticate(Request $request) : void
    {
                
    }

    public function doHandle(Request $request): bool
    {
        $jwt = $request->getJWT();
        $isValid =  $request->getType() == 'Admin'
                    && isset($jwt)
                    && $request->getToken() == '123Admin456';
        echo "\nAuthenticate\n";
        return !$isValid;
    }
}