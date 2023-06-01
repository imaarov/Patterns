<?php

namespace DesignPattern\Structural\Facade\Php;

class Main {

    public function __construct()
    {
        # Old way without Facade patter
        // $server = new NotificationServer();
        // $conn = $server->connect("127.0.0.1");
        // $authToken = $server->authenticate("23423", "23423");
        // $msg = new Message("hi");
        // $server->send($authToken, $msg, "you");
        // $conn->disconnect();

        # With Facade pattern
        $service = new NotificationService();
        $service->send(message: "hi", target: "you");
    }
}