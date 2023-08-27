<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>

    <body>
    <?php
    
    $id = $_GET['id'];
    $task = $_GET['task'];
    ?>
      <?php
    if (isset($_POST['update_btn'])) {
          $updateData = $_POST['updated_task'];
        if ($updateData && $updateData != $task) {
              $query = "UPDATE todo SET task='$updateData' WHERE id=$id";
              require("./connect.php");
              mysqli_query($connection,$query);
              header("Location:read.php");
        } else {
            echo "fail data pas";
        }
    }
    ?>
        <form method="post">
            <input type="text" name='updated_task' value='<?php echo $task; ?>'>
            <button name='update_btn'>update</button>
        </form>
      
    </body>

</html>