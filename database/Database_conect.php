<?php

function open_connect(){
    $host = "localhost";
    $user = "root";
    $password = "";
    $database = "rpg_character_db";
    $connection = mysqli_connect($host, $user, $password) or die ('unable to connect to database');
    mysqli_select_db($connection, $database) or die ('Unable to select database!');
    return $connection;
}

function close_connect($connection){
    mysqlI_close($connection);
}