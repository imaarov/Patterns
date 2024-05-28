<?php

namespace Imaarov\Patterns\Structural\Facade;

class NotificationService {

    public function send(string $message, string $target)
    {
        $server = new NotificationServer();
        $conn = $server->connect("127.0.0.1");
        $authToken = $server->authenticate("23423", "23423");
        $msg = new Message($message);
        $server->send($authToken, $msg, $target );
        $conn->disconnect();

    }
}