<?php

namespace DesignPattern\Structural\Proxy\Php;

class Main {
    public function __construct()
    {
        $library = new Library();
        $fileNames = ["a", "b", "c"];
        foreach ($fileNames as $key => $fileName) {
            $library->add(new EBookProxy($fileName));
        }

        $library->openEbook("a");
        $library->openEbook("b");
    }
}