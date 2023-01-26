<?php

namespace DesignPattern\Behavioral\TemplateMethod\Php\Miner;

use DesignPattern\Behavioral\TemplateMethod\Php\Abstract\MinerAbstract;

class ExcelMiner extends MinerAbstract {

    protected function parseFile(string $fileName)
    {
        // Parsing the EXCEL file
    } 

    protected function analyzeData(string $fileName)
    {
        // Analyzing the EXCEL file
    }
}