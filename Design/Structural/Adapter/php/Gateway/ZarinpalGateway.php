<?php

namespace DesignPattern\Structural\Adapter\Php\Gateway;

use DesignPattern\Structural\Adapter\Php\Gateway;

class ZarinpalGateway {

    /**
     * 3rd party library configuration
     * 
     * @param void
     * @return void
     */
    public function requireLibraryConfig()
    {
        echo "\nZarinpal config\n";
    }

    /**
     * pay method 
     * 
     * @param Gateway $gateway
     * @return void
     */
    public function pay(Gateway $gateway): void
    {
        
    }
}