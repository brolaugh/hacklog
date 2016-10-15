<?php


namespace Controller;

use HackLog\Core\Controller;

class AccountController extends Controller
{
    /**
     * Error 403 if not logged in
     */
    public function __construct()
    {

    }

    /**
     * Viewing all the settings of your account
     * Features:
     *  Creating new blogs
     *  Changing email, password, username
     */
    public function index()
    {

    }

    /**
     * Handles the form sent when requesting a new blog be made
     * returns to where it when errors arise such as invalid url-title or the url-title is already in use
     */
    public function newBlogRequest()
    {

    }
}
