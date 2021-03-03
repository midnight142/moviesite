<?php
    session_start();
    require_once('configs.php');
    require_once('functions.php');

    $sp_controller = array(
      'home' => array('index', 'list', 'error', 'search', 'bookmark', 'unbookmark'),
      'account' => array('login', 'register', 'logout', 'profile'),
      'list' => array('category', 'kind', 'trailer'),
      'panel' => array('home', 'update', 'delete'),
      'movie' => array('trailer', 'detail', 'view', 'comment')
    );

    if (isset($_GET['controller'])) {
        $controller = $_GET['controller'];
        if (isset($_GET['action'])) {
            $action = $_GET['action'];
        }
        else
            $action = 'index';
    }
    else {
        $controller = 'home';
        $action = 'index';
    }

    if (!array_key_exists($controller, $sp_controller) || !in_array($action, $sp_controller[$controller])) {
        $controller = 'home';
        $action = 'error';
    }

    include_once("controllers/" . $controller . "_controller.php");
    $className = ucfirst($controller) . "Controller";

    $obj = new $className();
    $obj->$action();
?>