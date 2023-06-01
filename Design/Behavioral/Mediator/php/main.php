<?php

namespace DesignPattern\Behavioral\Mediator\Php;

class Main {

    public function __construct()
    {
        $dialog = new ArticleDialogBox();
        $dialog->simulateUserInteraction();
    }
}