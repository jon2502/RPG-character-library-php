<?php
    require_once("Database_conect.php");
    //check if variable is declared and is different than null
    if (isset($_GET['fileName'])) {
        $table = 'downloads';
        $collums ='ID, name, link';
        $values = 'name = ?';
        $index ='downloadName';
        $bind = 's';
        $bindvalues = $_GET['fileName'];
        $result = GetFile($table, $collums, $values, $index, $bind, $bindvalues);
    }