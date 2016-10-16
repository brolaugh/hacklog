<?php


namespace HackLog\Core;

use Exception\NoConfigurationException;
use HackLog\Exception\NoConfigurationChooserException;

class App
{
    public static $page;
    public static $tagged;
    public static $date;
    public static $dateRange = ['start' => null, 'end' => null];
    public static $controller;
    public static $method;
    public static $configuration;


    /**
     * App constructor.
     *
     * @param string $requestUri | The part of the URL that is behind the domain and port e.g
     *                           example.com:8080/this/is/the/uri
     */
    public function __construct(string $requestUri)
    {
        /**
         *  Bootstraps the application and calls the chosen controller and controller method according to $requestUri
         */
        $this->loadConfig();
        $this->gerUriParameters($requestUri);
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

    /**
     * Reads the wanted config in the config.ini file found in the project root
     * If the wanted config cant be found in the config folder an NoConfigurationException is thrown
     *
     * @throws NoConfigurationException
     */
    private function loadConfig()
    {
        $configurationChooser = parse_ini_file('config.ini');
        if ($configurationChooser == false) {
            throw new NoConfigurationChooserException();
        }
        $configuration = parse_ini_file("config/" . $configurationChooser['configuration'] . ".ini");
        if ($configuration == false) {
            throw new NoConfigurationException();
        }
        self::$configuration = $configuration;
    }
}
