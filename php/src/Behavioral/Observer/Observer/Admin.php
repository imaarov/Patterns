<?php

namespace Imaarov\Patterns\Behavioral\Observer\Observer;

use Imaarov\Patterns\Behavioral\Observer\Interface\ObserverInterface;

class Admin implements ObserverInterface {

    /**
     * Update method for admin when the subscribe notify and if admin exsist in subscribers (Observers array)
     * 
     * @param mixed $value
     * @return void 
     */
    public function update($value)
    {
        echo "\n POPUP UPDATE + {$value}\n";
    }
}