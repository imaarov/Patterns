<?php

namespace DesignPattern\Behavioral\Memento\Php;

include_once 'BrowserState.php';

use DesignPattern\Behavioral\Memento\Php\BrowserState;

class Browser { 

    private string $tab;

    public function getTab() :string {
        return $this->tab;
    }

    public function setTab(string $tab) {
        $this->tab = $tab;
    }

    public function createState() : BrowserState {
        return new BrowserState($this->tab);
    }

    public function restore(BrowserState $browserState) {
        $this->tab = $browserState->getContent();
    }
}