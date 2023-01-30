<?php

namespace DesignPattern\Structural\AbstractFactory\Php\App;

use DesignPattern\Structural\AbstractFactory\Php\Interface\WidgetFactoryInterface;

class ContactForm {

    /**
     * Get a WidgetFactory instance and render textbox and button of given type
     * 
     * @param WidgetFactoryInterface $factory
     * @return void
     */
    public function render(WidgetFactoryInterface $factory)
    {
        $factory
            ->createTextbox()
            ->render();
        $factory
            ->createButton()
            ->render();
    }

}