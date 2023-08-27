<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> -->

</head>

<body>
    <?php
    require("./connect.php");
    require("./nav.php");
    ?>
    <table border="2">
        <thead>
            <th>id</th>
            <th>todo</th>
            <th>time</th>
            <th>function</th>
        </thead>
        <tbody>
            <?php

            $query = "SELECT * FROM todo";
            $data =   mysqli_query($connection, $query);
            while ($singleData = mysqli_fetch_assoc($data)) {
                echo " 
             <tr>
                <td>{$singleData['id']}</td>
                <td>{$singleData['task']}</td>
                <td>{$singleData['create_at']}</td>
    <td><a href='./update.php?id={$singleData['id']}&task={$singleData['task']}'>Update</a> <a href='./delete.php?id={$singleData['id']}'>Delete</a></td>
            </tr>";
            }
            ?>

        </tbody>
    </table>
</body>

</html>