<?php


namespace HackLog\Core;

class Session
{
    /**
     * @param string $key
     */
    public static function get(string $key)
    {

    }

    /**
     * Checks whether a session variable is set or not
     *
     * @param  string $key
     * @return bool
     */
    public static function exists(string $key): bool
    {
        return isset($_SESSION[$key]) ? true : false;
    }

    /**
     * Sets the value to the specified key
     *
     * @param string $key
     * @param        $value
     */
    public static function set(string $key, $value)
    {
        $_SESSION[$key] = $value;
    }

    /**
     * Adds the value to the specified array
     *
     * @param string $key
     * @param        $value
     */
    public static function add(string $key, $value)
    {
        if (!is_array($_SESSION[$key])) {
            $_SESSION[$key] = [$value];
        } else {
            $_SESSION[$key][] = $value;
        }
    }

    /**
     * Adds the value to the specified array with assocKey as an associate key
     * Useful for when wanting to separate different kinds of problems
     *
     * @param string $key
     * @param        $assocKey
     * @param        $value
     */
    public static function addAssoc(string $key, $assocKey, $value)
    {
        if (!is_array($_SESSION[$key])) {
            $_SESSION[$key][$assocKey] = [$value];
        } else {
            $_SESSION[$key][$assocKey] = $value;
        }
    }

    /**
     * Deletes the specified value of the key
     *
     * @param string $key
     */
    public static function delete(string $key)
    {
        if (self::exists($key)) {
            unset($_SESSION[$key]);
        }
    }

    /**
     * Initiates the session if it's not already started
     */
    public static function init()
    {
        if (session_id() == '') {
            session_start();
        }
    }

    /**
     * Closes the session ( and logs the user out)
     */
    public static function destroy()
    {
        if (session_id() != '') {
            session_destroy();
        }
    }
}
