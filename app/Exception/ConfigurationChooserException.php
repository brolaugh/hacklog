<?php


namespace HackLog\Exception;

class ConfigurationChooserException extends \Exception
{
    public static function fileNotFound(string $filePath)
    {
        return new static("$filePath not found in project root");
    }
    public static function fileEmpty(string $filePath)
    {
        return new static("$filePath is an empty file");
    }
}
