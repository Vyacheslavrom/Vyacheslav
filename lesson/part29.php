<?php
    //require_once 'user_class.php';
    //require_once 'point_class.php';

    /*function __autoload($classname){
      require_once "home/www/project1.ru/lesson/{$classname}_class.php";

    }*/
    echo get_include_path().'<br/>';
    set_include_path(get_include_path().PATH_SEPARATOR.'core'.PATH_SEPARATOR.'lib');
    spl_autoload_extensions('_class.php');
    spl_autoload_register();
    $user = new User();
    echo $user->name.'<br/>';

    $c = new Circle();
    echo $c->r;
 ?>
