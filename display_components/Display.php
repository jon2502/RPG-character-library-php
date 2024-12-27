    <?php

    function character_link($row){
        $result ="
        <h3><a href=\"Character.php?Name=".htmlentities($row[1])."\" class=\"button_link main_text\">".htmlentities($row[1])."</a></h3>
        ";
        echo $result;
    }

    function character_small_display($row){
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

    function character_display($row){
        $display ="
        <section id=\"Grid\">
            <div>
                <h1>".htmlentities($row[1])."</h1>";
                for($i = 9; $i<24; $i++){
                    if(isset($row[$i])){
                        $display .= "
                        <p>".htmlentities($row[$i])."</p>
                        ";
                    }
                }
            $display .= "
            </div>
            <div>
                <img src=".htmlentities($row[2])." :alt=".htmlentities($row[1]).">
            </div>
        </section>
        ";
        echo $display;
    }

    function download_btns($row){
        $display ="
        <button class=\"btn-act\" data-name=\"".htmlentities($row[1])."\">
        ".htmlentities($row[1])."
        </button>
        ";
        echo $display;
    }

    function image_display($row){
        $display ="<img class=\"galleryIMG\" src=".htmlentities($row[1])." :alt=".htmlentities($row[0]).">";
        echo $display;
    }

    function system_list($row){
        $Systems ="
        <h3><a href=\"Systems.php?System=".htmlentities($row[1])."\">".htmlentities($row[1])."</a></h3>
        ";
        echo $Systems;
    }
    ?>
