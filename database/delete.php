<?php
require("./connect.php");
$id = $_GET['id'];
$query = "DELETE FORM `todo` WHERE id=$id";
$runstatus = mysqli_query($connection, $query);
