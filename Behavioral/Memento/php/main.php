<?php

include_once 'Browser.php';

use DesignPattern\Creational\Php\Browser;
use DesignPattern\Creational\Php\History;

class Main {

    # Init the dependenies class (The history and state classes)
    public function __construct(
        private $browser = new Browser(),
        private $history = new History()
    )
    { }

    public function setDataToTab(string $data, bool $saveToHistory = true)
    {
        # Set some data for tab
        $this->browser->setTab("some");
        # Create State and pass it to history
        if($saveToHistory)
            $this->history->push($this->browser->createState());
        return true;
    }

    public function undo()
    {
        $this->browser->restore($this->history->pop());
        return $this->browser->getTab();
    }
}