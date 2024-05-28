<?php

namespace Imaarov\Patterns\Structural\Bridge;


class Main {

    public function __construct()
    {
        # normal Remote Control
        $remoteControl = new RemoteControl(new SonyTV());
        $remoteControl->turnOn();
        
        # Advance Remote Control
        $remoteControl1 = new AdvanceRemoteControl(new SonyTV());
        $remoteControl->turnOn();
    }
    
}