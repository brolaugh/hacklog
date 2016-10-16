<?php


namespace HackLog\Controller;

use HackLog\Core\Controller;

class BlogController extends Controller
{
    private $blogName;

    /**
     * Blog constructor.
     *
     * @param string $blogName
     */
    public function __construct(string $blogName)
    {
    }

    /**
     * If the post name isn't empty Blog::post gets called
     * If empty the last 10 or so posts are shown in reverse chronological order
     *
     * @param string $postName
     */
    public function index(string $postName = '')
    {
    }

    /**
     * Page for viewing a single blog post
     *
     * @param string $postName
     */
    public function post(string $postName = '')
    {
    }

    /**
     * Lists search result
     * Handles the search request
     *
     * @param $query
     */
    public function search(string $query)
    {
    }

    /**
     * Page for writing and editing posts
     *
     * @param string $urlTitle | if set it'll try to get the post specified and throw Error 404 on failure
     */
    public function compose(string $urlTitle = '')
    {
    }

    /**
     * Handles the form sent by the compose method
     */
    public function composeRequest()
    {
    }

    /**
     * The settings for the blog $this->blogName
     */
    public function settings()
    {
    }

    /**
     * Handles the form sent by the settings method
     */
    public function settingsRequest()
    {
    }
}
