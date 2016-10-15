<?php


namespace HackLog\Core;


class Controller
{
    /**
     * Controller constructor.
     */
    public function __construct()
    {

    }

    /**
     * @param string $page     | The page that is to be shown
     * @param array  $viewData | The data that the view has to work with
     * @param string $theme    | What theme that should be used for the view , this is also decides what template engine that should be used
     */
    protected function view($page, $viewData = [], $theme = "bootstrap-material")
    {
        echo "resources/view/$theme/$page.template.php";
    }

    /**
     *  Recieves the theme and picks the corresponding template engine that is used by that theme
     *
     * @param  string $theme |
     * @return templateEngineInstance kinda |
     */
    private function prepareTemplatingEngine(string $theme)
    {

    }
}