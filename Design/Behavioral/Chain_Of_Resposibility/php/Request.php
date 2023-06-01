<?php

namespace DesignPattern\Behavioral\ChainOfResponsibility\Php;

class Request {
    
    public function __construct(
        private string $type,
        private string $token,
        private string $jwt
    )
    { }

    public function getType() : string
    {
        return $this->type;
    }

    public function getToken() : string
    {
        return $this->token;
    }

    public function getJWT() : string
    {
        return $this->jwt;
    }
}