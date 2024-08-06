<html>
<head>
<title>Systems</title>
</head>
<body>
    <?php
    require_once("./database/Database_conect.php");
    require_once("./display_components/header.php");
    require_once("./display_components/Display.php");
    $System = $_GET['System']?? false;
    var_dump($System);
    $table = 'systems';
    $collums ='ID, System_name';
    $result = GetAll($table, $collums);
    if (sizeof($result) > 0) {
        foreach ($result as $row) {
            system_list($row);
        }     
    }
    if($System != false){
        
    }
    ?>
</body>
</html>