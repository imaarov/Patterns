<?php

use Imaarov\Patterns\Behavioral\Memento\Browser;
use Imaarov\Patterns\Behavioral\Memento\History;

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
        $this->browser->setTab($data);
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

    public function showAllHistory() : array
    {
        return $this->history->showAllHistory();
    }
}

$m = new Main();
$m->setDataToTab("some 1");
$m->setDataToTab("some 2");
$m->setDataToTab("lkanfldknalksdf");
echo $m->undo() . PHP_EOL;
print_r($m->showAllHistory());