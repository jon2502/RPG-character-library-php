<html>
<head>
<title>Downloads</title>
<link rel="stylesheet" href="./styling_and_script/Styling.css">
<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<script>
    /*$(document).ready(function() {
        $(".btn-act").on("click", function(e) {
            e.preventDefault();
            var fileName = $(this).data("name");
            
            $.ajax({
                url: url,
                type: POST
                data: data,
                success: success,
                dataType: dataType
            });
        })
    })/
</script>
</head>
<body>
    <?php
    require_once("./database/Database_conect.php");
    require_once("./display_components/header.php");
    require_once("./display_components/Display.php");

    $table = 'downloads';
    $collums ='ID, Name';
    $result = GetAll($table, $collums);
    if (sizeof($result) > 0) {
        foreach ($result as $row) {
            download_btns($row);
        }
    }

    ?>
</body>
</html>