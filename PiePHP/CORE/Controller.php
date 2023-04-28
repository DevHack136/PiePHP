<?php

namespace Core;

class Controller 
{
    static public $_render;

    protected $request;

    public function __construct()
    {
        $this->request = new Request();
    }

    protected function render($View, $scope = [])
    {
        extract($scope);
        $f = implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'SRC', 'View', str_replace('Controller', '', basename(get_class($this))), $View]) . '.php';

        if (file_exists($f)) {
            ob_start();
            include($f);
            $View = ob_get_clean();
            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'SRC', 'View', 'index']) . '.php');
            self::$_render = ob_get_clean();
        }
    }
}