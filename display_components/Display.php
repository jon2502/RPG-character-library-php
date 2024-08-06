
    <?php

    function character_link($row){
        $result ="
        <h3><a href=\"Character.php?Name=".htmlentities($row[1])."\" class=\"button_link main_text\">".htmlentities($row[1])."</a></h3>
        ";
        echo $result;
    }
    function character_display($row){
        $display ="
        <div class= \"infoContainer\">
        <div>
            <h2>".htmlentities($row[1])."</h2>
            <ul>
                <li>".htmlentities($row[3])."</li>
                <li>".htmlentities($row[4])."</li>
                <li>".htmlentities($row[5])."</li>";
                if($row[6] != ""){
                    $display .= "<li>".htmlentities($row[6])."</li>";
                }
        $display .= "<li>".htmlentities($row[7])."</li>
            </ul>
        </div>
        <img src=".htmlentities($row[2])." :alt=".htmlentities($row[1]).">
        </div>
        ";
        echo $display;
    }
    ?>
