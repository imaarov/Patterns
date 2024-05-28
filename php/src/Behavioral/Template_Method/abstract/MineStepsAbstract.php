<?php

namespace Imaarov\Patterns\Behavioral\TemplateMethod\Abstract;

abstract class MinerAbstract {

    
    // The Parsing Operation and Analyze operation BASE on the file is DIFFRENT so define abstract of it here
    abstract protected function parseFile(string $fileName);
    abstract protected function analyzeData(string $fileName);

    // The sendReport Process or close/open a file its not rely on file mime or anything(IN THIS CASE)
    protected function sendReport()
    {
        echo "\nsending report\n";
    }

    protected function openFile(string $fileName)
    {
        echo "\nopen file\n";
    }

    protected function closeFile()
    {
        echo "\nclose file\n";
    }


    /**
     * Do the tasks in order
     */
    final public function template(string $fileName)
    {
        echo "\nStart mining for the $fileName file";
        $this->openFile($fileName);
        $this->parseFile($fileName);
        $this->analyzeData($fileName);
        $this->sendReport();
        $this->closeFile();

    }
}
