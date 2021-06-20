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
        $curl = curl_init();

        // set our url with curl_setopt()
        curl_setopt($curl, CURLOPT_URL, "https://cdpt.in/shorten?url=".$url);

        // return the transfer as a string, also with setopt()
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

        // curl_exec() executes the started curl session
        // $output contains the output string
        $output = curl_exec($curl);
        return $output;
    }
}
