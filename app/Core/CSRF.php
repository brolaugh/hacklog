<?php


namespace HackLog\Core;

class CSRF
{
    private static $token;
    public static $validationResult = false;

    /**
     * Generates a CSRF token if it's not already generated in this request
     * Stores the token in a session for validation
     * @return string
     */
    public static function generate() : string
    {
        if (!isset(self::$token)) {
            self::$token = bin2hex(random_bytes(64));
            Session::set('csrf_token', self::$token);
        }
        return self::$token;
    }

    /**
     * Checks whether the CSRF token provided by the client is valid
     * The token consumed and deleted opon validation
     * @param $clientToken
     * @return bool
     */
    public static function validate(string $clientToken) : bool
    {
        $result = (Session::get('csrf_token') === $clientToken) ? true : false;
        Session::delete('csrf_token');
        self::$validationResult = $result;
        return $result;
    }
}
