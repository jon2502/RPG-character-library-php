<html>
<head>
<title>Characters</title>
<link rel="stylesheet" href="./styling_and_script/Styling.css">
</head>
<body>
    <?php
    require_once("./database/Database_conect.php");
    require_once("./display_components/header.php");
    require_once("./display_components/Display.php");
    $table = 'characters';
    $collums ='ID, Name, IMG, Race, Culture_Background, Profession_Class, Subclass, Place_of_birth';
    $result = GetAll($table, $collums);

    if (sizeof($result) > 0) {
        foreach ($result as $row) {
            character_link($row);
        }
        echo '<section class="Libary">';
        foreach ($result as $row) {
            character_small_display($row);
        }
        echo '</section>';
    }
    ?>
</body>
</html>