<?php


namespace Controller;

use HackLog\Core\Controller;

class ErrorController extends Controller
{
    /**
     * Tells the client the page has moved to $redirectURI
     * Redirects to $redirectURI
     * Or displays a link to the page with some nice error page
     *
     * @param $redirectURI
     * TODO: Implement method
     */
    public function error301($redirectURI)
    {

    }

    /**
     * For when forms are being naughty
     * TODO: Implement method
     */
    public function error400()
    {

    }

    /**
     * For pages like /{blogname}/settings and the client is not the owner of that blog
     * Redirects to $RedirectURI after 2-3 seconds
     *
     * @param $redirectURI
     * TODO: Implement method
     */
    public function error403($redirectURI)
    {

    }

    /**
     * For when a page with odd URI like /page/2
     * On the index the there is no use for the page variable to be set and that throws HTTP error 404
     * Also for when the client is trying to access an unpublished post on a blog the client is not the owner of
     * TODO: Implement method
     */
    public function error404()
    {

    }

    /**
     * I'm a teapot
     * TODO: Figure out a usage of this HTTP message
     */
    public function error418()
    {

    }

    /**
     * For when a user has sent too many forms in a short amount of time
     * TODO: Specify that amount of requests and time
     * TODO: Implement method
     */
    public function error429()
    {

    }

    /**
     * For when a form has been sent in with an invalid CSRF Token
     * TODO: Implement method
     */
    public function error498()
    {

    }

    /**
     * For when a form has been sent in without a CSRF Token
     * TODO: Implement method
     */
    public function error499()
    {

    }
}
