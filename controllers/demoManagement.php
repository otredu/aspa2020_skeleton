<?php
require_once "database/connection.php";
require_once "database/models/demo.php";

function demoController(){
    $pdo = connectDB();
    $allinfo = getAllDemoInfo($pdo);
    require "views/demo.view.php";    
}





