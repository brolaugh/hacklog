<?php


namespace HackLog\Exception;

use Exception;

class NoConfigurationChooserException extends Exception
{
    protected $message = "config.ini not found in project root";
}