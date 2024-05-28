<?php

namespace Imaarov\Patterns\Behavioral\Mediator;

use Imaarov\Patterns\Behavioral\Mediator\DialogBox;

class UIControl {
    

    public function __construct(
        protected DialogBox $owner
    )
    { }

}