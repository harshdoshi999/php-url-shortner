<?php

namespace CodePortal\UrlShortener;

class UrlShortener
{
    /**
     *  Build a new UrlShortener instance
     *
     *  @param  Drivers\DriverInterface     $driver
     *  @param  Drivers\Factory             $driverFactory
     *  @return void
     */
    public function __construct()
    {
        
    }

    /**
     *  Shorten the given url
     *
     *  @param  string  $url
     *  @throws InvalidResponseException
     *  @return string
     */
    public function shorten($url)
    {
        $url = "test.com";
        return $url;
    }
}
