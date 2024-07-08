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

function GetAll(){
    $connection = open_connect();
    $query = mysqli_prepare($connection, "SELECT $collums FROM $table");
    mysqli_stmt_execute($query);
    $errorcheck = (mysqli_stmt_errno($query));
    if($errorcheck){
        echo "Error in query: $query. " . mysqli_stmt_error($query); 
    } else {
    $success = mysqli_stmt_get_result($query);
    $content = mysqli_fetch_all($success);
    }
    close_connect($connection);
    return $content;
}