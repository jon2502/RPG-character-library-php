<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" href="./styling_and_script/Styling.css">
</head>
<body>
    <?php
        require_once("./database/Database_conect.php");
        require_once("./display_components/header.php");
        require_once("./display_components/Display.php");
        $character = $_GET['character']?? false;
        echo '<h2>Gallery</h2>';

        if($character != false){
            $table = 'character_imgs';
            $collums ='ID, IMG, Characters';
            $result = GetAll($table, $collums);
            if (sizeof($result) > 0) {
                foreach ($result as $row) {
                    $Characters = json_decode($row[2]);
                    if(in_array($character, $Characters)){
                        image_display($row);
                    }
                    
                }
            }
        }else{
            $table = 'character_imgs';
            $collums ='ID, IMG';
            $result = GetAll($table, $collums);
            var_dump($result);
            if (sizeof($result) > 0) {
                foreach ($result as $row) {
                    image_display($row);
                }
            }
        }
    ?>
</body>
</html>