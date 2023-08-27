<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Todo</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    </head>
    <?php
require("./connect.php");
require("./nav.php");
?>

    <body class="container">
        <form method="POST" class="input-group">
            <input autofocus name="todo" type="text" placeholder="What's in your mind to do">
            <button name="add">Add</button>
        </form>
        <?php
    if (isset($_POST['add'])) {
        $todo = $_POST['todo'];
        if ($todo) {
            $query = "INSERT INTO `todo` (task) VALUES ('$todo')";
            mysqli_query($connection, $query);
        } else {
            echo 'data not taken';
        }
    }

    ?>
    </body>

</html>