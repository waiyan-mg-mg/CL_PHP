<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
        <?php
    require("./connect.php");
    $id = $_GET['id'];
    $task = $_GET['task'];
    ?>
        <form method="post">
            <input type="text" name='updated_task' value='<?php echo $task; ?>'>
            <button name='update_btn'>update</button>
        </form>
        <?php
    if (isset($_POST['update_btn'])) {
        if (!$_POST['updated_task'] && !$_POST['update_task'] == $task) {
            echo "data passs";
        } else {
            echo "fail data pas";
        }
    }
    ?>
    </body>

</html>