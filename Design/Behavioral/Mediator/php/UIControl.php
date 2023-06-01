<?php

namespace DesignPattern\Behavioral\Mediator\Php;

class UIControl {
    

    public function __construct(
        protected DialogBox $owner
    )
    { }

}