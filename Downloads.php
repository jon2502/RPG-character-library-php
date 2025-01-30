<html>
<head>
<title>Downloads</title>
<link rel="stylesheet" href="./styling_and_script/Styling.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    $(document).ready(function() {
        $(".btn-act").on("click", function(e) {
            e.preventDefault();
            var fileName = $(this).data("name");
            console.log(fileName)
            
            $.ajax({
                url: "./database/download_function.php",
                data: {fileName: fileName},
                xhrFields: {responseType: 'blob' },
                success: function(response) {
                    console.log(response)
                    if (response instanceof Blob) {
                        // Create a download link for the file
                        var link = document.createElement('a');
                        link.href = URL.createObjectURL(response);
                        link.download = fileName; // Set the download file name
                        link.click(); // Trigger the download
                    } else {
                        alert('Error: File content not received properly.');
                    }
     
                },
                error: function() {
                    alert('Error in downloading the file.');
                }  
            });
        })
    })
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