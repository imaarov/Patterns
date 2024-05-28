<?php

namespace Imaarov\Patterns\Structural\AbstractFactory;

use Imaarov\Patterns\Creational\AbstractFactory\Material\MaterialWidgetFactory;
use Imaarov\Patterns\Structural\AbstractFactory\App\ContactForm;

class Main {

    public function __construct()
    {
        # Make new contact form 
        $contactForm = new ContactForm();
        # Assign Theme Widget Factory to contact form render method
        $contactForm->render(new MaterialWidgetFactory());
    }
}