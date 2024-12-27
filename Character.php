<html>
<head>
<title>Character</title>
<link rel="stylesheet" href="./styling_and_script/Styling.css">
</head>
<body>
    <?php
    require_once("./database/Database_conect.php");
    require_once("./display_components/header.php");
    require_once("./display_components/Display.php");
    $Name = $_GET['Name'];
    $table = 'characters';
    $collums ='ID, Name, IMG, Race, Culture_Background, Profession_Class, Subclass, Place_of_birth, System, P1, P2, P3, P4, P5, P6, P7, P8, P9, P10, P11, P12, P13, P14, P15';
    $values = 'Name = ?';
    $index ='characterName';
    $bind = 's';
    $bindvalues = $Name;
    $result = GetOne($table, $collums, $values, $index, $bind, $bindvalues);
    if (sizeof($result) > 0) {
        foreach ($result as $row) {
            character_display($row);
        }
    }
    ?>
</body>
</html>