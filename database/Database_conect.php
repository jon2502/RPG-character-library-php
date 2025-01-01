<?php

function open_connect(){
    $host = "localhost";
    $user = "root";
    $password = "root";
    $database = "rpg_character_db";
    $connection = mysqli_connect($host, $user, $password) or die ('unable to connect to database1');
    mysqli_select_db($connection, $database) or die ('Unable to select database2');
    return $connection;
}

function close_connect($connection){
    mysqlI_close($connection);
}

function GetAll($table, $collums){
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

function GetOne($table, $collums, $values, $index, $bind, $bindvalues){
    $connection = open_connect();
    $query = mysqli_prepare($connection, "SELECT $collums FROM $table USE INDEX($index) WHERE $values");
    mysqli_stmt_bind_param($query, $bind, $bindvalues);
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

function GetFile($table, $collums, $values, $index, $bind, $bindvalues){
    $connection = open_connect();
    $bindvalues = mysqli_real_escape_string($connection, $bindvalues);
    $query = mysqli_prepare($connection, "SELECT $collums FROM $table USE INDEX($index) WHERE $values");
    mysqli_stmt_bind_param($query, $bind, $bindvalues);
    mysqli_stmt_execute($query);
    $errorcheck = (mysqli_stmt_errno($query));
    if($errorcheck){
        echo "Error in query: $query. " . mysqli_stmt_error($query); 
    } else {
        $success = mysqli_stmt_get_result($query);
        if ($row = mysqli_fetch_assoc($success)) {
            //filter variable with ILTER_VALIDATE_URL to check if its a valid url
            if (filter_var($row['link'], FILTER_VALIDATE_URL)) {
                //get contetn of file as a string
                $fileContent = file_get_contents($row['link']);
                if ($fileContent !== false) {
                    //set up header to send HTTP data
                    header("Content-Type: application/pdf"); // set content type to pdf
                    header("Content-Disposition: attachment; filename=\"" . basename($filePath) . "\"");
                    header('Content-Length: ' . strlen($fileContent)); // Use strlen for content length
                    echo $fileContent; // Output the file content
                } else {
                    echo "Failed to fetch the file content.";
                }
            }else{
                echo "File not found.";
            }
        }
        close_connect($connection);
    }
}