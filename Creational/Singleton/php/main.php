<?php

namespace DesignPattern\Creational\Singleton\Php;

class Main {

    public function __construct()
    {
        # Initialize here
        $manager = ConfigManager::getInstance();
        $manager->set("appID", "12121212");

        # Use the same instance with the same properties here to get the value
        $manager = ConfigManager::getInstance();
        $appId = $manager->get("appID");
    }
}