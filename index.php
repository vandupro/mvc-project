<?php
    session_start();
    define('BASE_URL', "/abc");
    define('BE_URL', './mvc/views/backend/');
    require_once "./mvc/Bridge.php";
    $myApp = new App();
?>