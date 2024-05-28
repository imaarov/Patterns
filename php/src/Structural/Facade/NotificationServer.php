<?php

namespace Imaarov\Patterns\Structural\Facade;

class NotificationServer {


    public function connect(string $ipAddr) : Connection
    {
        return new Connection();
    }

    public function authenticate(string $appID, string $key) : AuthToken
    {
        return new AuthToken();
    }

    public function send(AuthToken $authToken, Message $message, string $terget) : void
    {
        echo "\nSending message\n";
    }
}