<?php

namespace DesignPattern\Structural\AbstractFactory\Php;

use DesignPattern\Creational\AbstractFactory\Php\Material\MaterialWidgetFactory;
use DesignPattern\Structural\AbstractFactory\Php\App\ContactForm;

class Main {

    public function __construct()
    {
        # Make new contact form 
        $contactForm = new ContactForm();
        # Assign Theme Widget Factory to contact form render method
        $contactForm->render(new MaterialWidgetFactory());
    }
}