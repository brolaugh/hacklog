<?php


namespace HackLog\Core;

class Redirect
{
    /**
     * Redirects to an
     *
     * @param string $location
     */
    public static function to(string $location)
    {
        header("Location:/$location");
        exit();
    }

    /**
     * Redirects to a page that tells the user of the dangers of visiting unknown page
     * Page in question: /externallink
     *
     * @param string $adress
     */
    public static function toExternal(string $adress)
    {
    }

    /**
     * Same as method toExternal but without the protecting layer
     *
     * @param string $adress
     */
    public static function toExternalReal(string $adress)
    {
        header("Location: $adress");
        exit();
    }
}
