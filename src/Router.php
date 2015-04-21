<?php


namespace Jkuatapp\System;


use Luracast\Restler\Restler;


class Router
{
    protected $restlerRouter;

    /**
    * Constructs our system router
    */
    public function __construct()
    {
        $this->restlerRouter = new Restler();
    }

    /**
    * Register module to add its endpoints
    */
    public function registerModule()
    {

    }


    /**
    * Starts the Server listening
    */
    public function start()
    {
        $this->restlerRouter->addAuthenticationClass("Jkuatapp\\System\\Authentication");
        $this->restlerRouter->handle();
    }

}

