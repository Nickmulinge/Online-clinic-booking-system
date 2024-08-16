<?php

    $database= new mysqli("localhost","root","","hmsDB");
    if ($database->connect_error){
        die("Connection failed:  ".$database->connect_error);
    }

?>