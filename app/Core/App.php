<?php


namespace HackLog\Core;

class App
{
    public static $page;
    public static $lang;
    public static $tagged;
    public static $date;
    public static $dateRange = ['start' => null, 'end' => null];
    public static $controller;
    public static $method;


    /**
     * App constructor.
     *
     * @param string $requestUri | The part of the URL that is behind the domain and port e.g example.com:8080/this/is/the/uri
     */
    public function __construct(string $requestUri)
    {
        /**
         *  Bootstraps the application and calls the chosen controller and controller method according to $requestUri
         */
    }

    private function gerUriParameters(string $requestUri) : array
    {
        /**
         *  Takes the requestUri and turns it into an array
         * Picks out the following parts if present:
         * | general guide            | part in use
         * /{languageCode}            | /en/blogname
         * /page/{int}                | /blogname/page/2
         * /tagged/{tag}              | /blogname/tagged/kittens
         * /{date}                    | /blogname/2016-10-14
         * /{datestart}/{dateend}     | /blogname/2016-10-14/2016-10-27
         *
         * When it has found all the parts listed above it returns the uri back with the parts removed
         */
    }
}
