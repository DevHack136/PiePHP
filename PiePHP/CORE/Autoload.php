<?php
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);
?>

<?php
    spl_autoload_register(function($class)
    {
        $chemin = str_replace("\\", "/", $class) . ".php";
        if(file_exists($chemin)) {
            include_once $chemin;
        };
    });

    spl_autoload_register(function($class)
    {
        $chemin = 'CORE/' . str_replace("\\", "/", $class) . ".php";
        if(file_exists($chemin)) {
            include_once $chemin;
        };
    });

    spl_autoload_register(function($class)
    {
        $chemin = 'SRC/' . str_replace("\\", "/", $class) . ".php";
        if(file_exists($chemin)) {
            include_once $chemin;
        };
    });

    spl_autoload_register(function($class)
    {
        $chemin = 'SRC/Controller/' . str_replace("\\", "/", $class) . ".php";
        if(file_exists($chemin)) {
            include_once $chemin;
        };
    });

    spl_autoload_register(function($class)
    {
        $chemin = 'SRC/Model/' . str_replace("\\", "/", $class) . ".php";
        if(file_exists($chemin)) {
            include_once $chemin;
        };
    });

    spl_autoload_register(function($class)
    {
        $chemin = 'SRC/View/' . str_replace("\\", "/", $class) . ".php";
        if(file_exists($chemin)) {
            include_once $chemin;
        };
    });

    spl_autoload_register(function($class)
    {
        $chemin = 'SRC/View/Error/404.php' . str_replace("\\", "/", $class) . ".php";
        if(file_exists($chemin)) {
            include_once $chemin;
        };
    });

    spl_autoload_register(function($class)
    {
        $chemin = 'SRC/View/Error/User/login.php' . str_replace("\\", "/", $class) . ".php";
        if(file_exists($chemin)) {
            include_once $chemin;
        };
    });
?>