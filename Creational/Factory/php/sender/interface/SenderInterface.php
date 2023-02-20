<?php

namespace DesignPattern\Creational\Factory\Php\Sender\Interface;

interface SenderInterface {
    public function send();
    public function submitDb();
    public function getReceiversList();
}