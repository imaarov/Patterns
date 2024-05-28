<?php

namespace Imaarov\Patterns\Creational\Factory\NewSources;

use Imaarov\Patterns\Creational\Factory\Framework\Controller;
use Imaarov\Patterns\Creational\Factory\Interface\ViewEngineInterface;

class NewController extends Controller {


    /**
     * Create new view engine
     * 
     * @return ViewEngineInterface
     */
    public function createViewEngine() : ViewEngineInterface
    {
        return new NewViewEngine();
    }


    
}