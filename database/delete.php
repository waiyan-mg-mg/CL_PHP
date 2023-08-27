<?php
require("./connect.php");
$id = $_GET['id'];
$query = "DELETE FROM todo WHERE id=$id";
$runstatus = mysqli_query($connection, $query);
if ($runstatus) {
    header("Location:read.php");
} else {
    echo "Fail to Delete data";
}
