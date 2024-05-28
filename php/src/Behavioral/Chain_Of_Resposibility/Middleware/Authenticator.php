<?php

namespace Imaarov\Patterns\Behavioral\ChainOfResponsibility\Middleware;

use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Request;
use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Handler;

class Authenticator extends Handler {

    /**
     * Constructor function of authenticator
     *
     * @param Handler $next
     */
    public function __construct(Handler $next)
    {
        $this->next = $next;
    }

    /**
     * authenticable function
     *
     * @param Request $request
     * @return void
     */
    public function authenticate(Request $request) : void
    {
                
    }

    /**
     * doHandle function handle the request of Request type
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
        return !$isValid;
    }
}