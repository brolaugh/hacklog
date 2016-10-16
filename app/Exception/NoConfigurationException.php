<?php


namespace Exception;

class NoConfigurationException extends \Exception
{
    protected $message = "Provided configuration value invalid";
}
