<html>
<head>
<title>Systems</title>
<link rel="stylesheet" href="./styling_and_script/Styling.css">
</head>
<body>
    <?php
    require_once("./database/Database_conect.php");
    require_once("./display_components/header.php");
    require_once("./display_components/Display.php");
    $System = $_GET['System']?? false;
    $table = 'systems';
    $collums ='ID, System_name';
    $result = GetAll($table, $collums);
    echo '<h2>Systems</h2>';
    if (sizeof($result) > 0) {
        foreach ($result as $row) {
            system_list($row);
        }     
    }
    if($System != false){
        $table = 'characters';
        $collums ='ID, Name, IMG, Race, Culture_Background, Profession_Class, Subclass, Place_of_birth';
        $values = 'System = ?';
        $index = 'characterSystem';
        $bind = 's';
        $bindvalues = $System;
        $result = GetOne($table, $collums, $values, $index, $bind, $bindvalues);
        var_dump($result);
        if (sizeof($result) > 0) {
            echo '<h2>Characters</h2>';
            foreach ($result as $row) {
                character_link($row);
            }
            echo '<section class="Libary">';
            foreach ($result as $row) {
                character_small_display($row);
            }
            echo '</section>';
        }
    }
    ?>
</body>
</html>