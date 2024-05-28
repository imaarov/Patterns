<?php

namespace Imaarov\Patterns\Structural\AbstractFactory\App;

use Imaarov\Patterns\Structural\AbstractFactory\Interface\WidgetFactoryInterface;

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