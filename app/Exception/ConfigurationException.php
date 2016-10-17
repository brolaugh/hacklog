<?php


namespace HackLog\Exception;


class ConfigurationException extends \Exception
{
    public static function fileEmpty($configurationPath)
    {
        return new static("$configurationPath is empty file");
    }

    public static function fileNotFound(string $filePath)
    {
        return new static("Configuration file $filePath not found");
    }

}