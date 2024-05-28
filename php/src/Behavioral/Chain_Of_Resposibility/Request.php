<?php

namespace Imaarov\Patterns\Behavioral\ChainOfResponsibility;
class Request {
    
    /**
     * construct the requests parameters
     *
     * @param string $type
     * @param string $token
     * @param string $jwt
     */
    public function __construct(
        private string $type,
        private string $token,
        private string $jwt
    )
    { }

    /**
     * getter for typr
     *
     * @return string
     */
    public function getType() : string
    {
        return $this->type;
    }

    /**
     * getter for token
     *
     * @return string
     */
    public function getToken() : string
    {
        return $this->token;
    }

    /**
     * getter for jwt
     *
     * @return string
     */
    public function getJWT() : string
    {
        return $this->jwt;
    }
}