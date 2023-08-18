<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
        date_default_timezone_set("Asia/Yangon");
    $date = date("d/m/Y:l");
    $time = date("h-i-s");
    echo "$date.<br>";
    echo "$time.<br>";

    ?>
    </body>

</html>