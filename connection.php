<?php

    $database= new mysqli("localhost","root", "wes277sql@UK0","edoc");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>