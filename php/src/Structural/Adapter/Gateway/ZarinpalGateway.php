<?php

namespace Imaarov\Patterns\Structural\Adapter\Gateway;

use Imaarov\Patterns\Structural\Adapter\Gateway;

class ZarinpalGateway {

    /**
     * 3rd party library configuration
     * 
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