<?php

// namespace Core;
// 
// class Core {
//     public function run() {
//         require_once('./src/routes.php');
//         $BaseUrl = '/EPITECH/PiePHP/PiePHP';
// 
//         $URL = ucfirst(strtolower(str_replace($BaseUrl, '', $_SERVER['REQUEST_URI'])));
// 
//         $get = Router::get($URL);
// 
// 
//         if ($get !== null) {
//             $controllerClassName = '\Controller\\' . ucfirst($get['controller']) . 'Controller';
// 
//             if (is_callable(array(new $controllerClassName, $get['action']))) {
//                 call_user_func(array(new $controllerClassName, $get['action']));
//             }
//         }
//     }
// }

namespace Core;

class Core
{
    public function run()
    {
        $BaseUrl = '/EPITECH/PiePHP/PiePHP';

        $url = ucfirst(strtolower(str_replace($BaseUrl, '', $_SERVER['REQUEST_URI'])));

        $url_explode = explode('/', $url);

        $controller = "\\Controller\\" . $url_explode[1] . "Controller";
        $action = $url_explode[2] ?? "";

        if (class_exists($controller) && is_callable(array(new $controller, $action))) {
            call_user_func(array(new $controller, $action));
        } else {
            echo "
                <center>
                    <h1>ERROR 404</h1>
                </center>
            ";
        }
    }
}