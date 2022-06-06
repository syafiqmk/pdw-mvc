<?php 

    //turn error reporting off
    // error_reporting(0);

    //check session
    if(!session_id()) {
        //session start
        session_start();
    }

    //require init
    require_once "../app/init.php";
    $app = new App;
?>