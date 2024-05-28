<?php

namespace Imaarov\Patterns\Behavioral\ChainOfResponsibility;

use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Middleware\Authenticator;
use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Middleware\Loggin;
use Imaarov\Patterns\Behavioral\ChainOfResponsibility\Middleware;

class Main {

    public function __construct()
    {
        # loggin is the last on so next object we pass its null to stop the chain
        $loggin = new Loggin(null);
        # To keep the chain tight we pass the first handler to next handler
        $authenticator = new Authenticator($loggin);

        # Start the chain
        $server = new Middleware($authenticator);

        $server->handle(new Request(type: 'Admin', token: '123Admin456', jwt: '12n121'));
    }
}