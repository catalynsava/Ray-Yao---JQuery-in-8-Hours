<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getFile</title>
</head>
<body>
    <?php
    if (isset($_GET["data"])) {
        if ($_GET["data"] == "100") {
            echo "100";
        }
    }else{
        echo("is not set");
    }
       
    ?>
</body>
</html>