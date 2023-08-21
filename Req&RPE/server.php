<?php
$name = $_POST["email"];;
$password = $_POST["password"];
$picture = $_FILES['picture']['type'];

if ($name == "admin@admin" && $password == "admin") {
    //  [tmp_name] [name] 

    $image_name = $_FILES['picture']['name'];
    $pam_loc = "./photo/" . $image_name;
    move_uploaded_file($image_name, $pam_loc);

    // if (move_uploaded_file($image_name, $pam_loc)) {
    //     echo "Success Upload" . '<br>';
    // } else {
    //     echo "Fail Upload" . '<br>';
    // }
    echo "YOur name is $name. Your password is $password. Your Profile Type is $picture";
    echo "<br>" . "You are a valid user.";
} else {
    header("Location:client.php");
}
