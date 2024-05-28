<?php

namespace Imaarov\Patterns\Behavioral\Mediator;

abstract class DialogBox {
    abstract public function change(UIControl $uIControl);
}