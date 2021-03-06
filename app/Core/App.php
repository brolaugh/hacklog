<?php


namespace HackLog\Core;

use HackLog\Exception\ConfigurationChooserException;
use HackLog\Exception\ConfigurationException;

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


    private function getUriParametersAsGetVariables()
    {
        /**
         * Reads all available $_GET variables
         * languageCode | ISO 639-1 language code
         * page         | an int that states how many items to skip in the database. This number is multiplied
         *                  with per_page to get the offset for the database
         * per_page     | an int that states how many items that are wanted in the response
         * search       | if the client only wants data that contains a specific query
         * date         | if set only results from the specified date will be sent in the response
         * startdate    | if set only results that have been created/changed/published after this date will be sent
         *                  in the response
         * enddate    | if set only results that have been created/changed/published before this date will be sent
         *                  in the response
         *
         */
    }

    /**
     * Reads the wanted config in the config.ini file found in the project root
     * If the wanted config cant be found in the config folder a ConfigurationException is thrown
     *
     * @throws ConfigurationException
     */
    private function loadConfig()
    {

        $configurationChooserPath = 'config.ini';
        if (!file_exists($configurationChooserPath)) {
            throw ConfigurationChooserException::fileNotFound($configurationChooserPath);
        }
        $configurationChooser = parse_ini_file('config.ini');
        if (empty($configurationChooser)) {
            throw ConfigurationChooserException::fileEmpty($configurationChooserPath);
        }


        $configurationPath = "config/" . $configurationChooser['configuration'] . ".ini";
        if (!file_exists($configurationPath)) {
            throw ConfigurationException::fileNotFound($configurationPath);
        }
        $configuration = parse_ini_file("config/" . $configurationChooser['configuration'] . ".ini");
        if (empty($configuration)) {
            throw ConfigurationException::fileEmpty($configurationPath);
        }

        self::$configuration = $configuration;
    }
}
