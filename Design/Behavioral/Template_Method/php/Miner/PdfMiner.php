<?php

namespace DesignPattern\Behavioral\TemplateMethod\Php\Miner;

use DesignPattern\Behavioral\TemplateMethod\Php\Abstract\MinerAbstract;

class PdfMiner extends MinerAbstract {

    protected function parseFile(string $fileName)
    {
        // Parsing the PDF file
    } 

    protected function analyzeData(string $fileName)
    {
        // Analyzing the PDF file
    }
}