<?php

namespace DesignPattern\Behavioral\Mediator\Php;

abstract class DialogBox {
    abstract public function change(UIControl $uIControl);
}