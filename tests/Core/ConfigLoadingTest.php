<?php

use HackLog\Exception\ConfigurationChooserException;
use HackLog\Exception\ConfigurationException;
use HackLog\Exception\NoConfigurationChooserException;
use \PHPUnit\Framework\TestCase;
use \HackLog\Exception\NoConfigurationException;
use \HackLog\Core\App;

class ConfigLoadingTest extends TestCase
{
    private static $configurationChooserLocation = 'config.ini';
    private static $configChooserValue;
    public static $configMissingVariableContent;


    public function testConfigChooserMissingFile()
    {
        $this->expectException(ConfigurationChooserException::class);
        unlink(self::$configurationChooserLocation);
        new App("");
    }

    /**
     * The chosen file in config/ exists but it's empty
     */
    public function testConfigChooserFileEmpty()
    {
        $this->expectException(ConfigurationChooserException::class);
        file_put_contents(self::$configurationChooserLocation, "");
        new App("");
    }

    public function testConfigMissingFile()
    {
        $this->expectException(ConfigurationException::class);
        file_put_contents(self::$configurationChooserLocation, 'configuration = "megaconfiguration"');
        new App("");
    }

    /**
     * The chosen config file has a few options set but all of them
     */
    public function testConfigChosenMissingVariables()
    {

    }

    public function setUp()
    {
        self::$configChooserValue = file_get_contents('config.ini');
        parent::setUpBeforeClass();
    }

    public function tearDown()
    {
        file_put_contents(self::$configurationChooserLocation, self::$configChooserValue);
        parent::tearDownAfterClass();
    }
}
