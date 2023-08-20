<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body class="container">
    <form enctype="multipart/form-data" method="post" class="w-50 mx-auto mt-5 bg-info-subtle rounded-3 p-3 text-warning-emphasis">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input required type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
        </div>
        <label for="inputPassword5" class="form-label">Password</label>
        <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" required name="password">
        <div id="passwordHelpBlock" class="form-text">
            Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces,
            special characters, or emoji.
        </div>
        <div class="input-group my-3">
            <label class="input-group-text" for="inputGroupFile01">Random jpg picture for auth.</label>
            <input name="picture" type="file" class="form-control" id="inputGroupFile01" required>
        </div>
        <div class="text-center
            ">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>
    </form>
    <?php

    $name = $_POST["email"];;
    $password = $_POST["password"];
    $picture = $_FILES['picture']['type'];

    if ($name == "admin@admin" && $password == "admin") {
        //  [tmp_name] [name] 

        $image_name = $_FILES['picture']['name'];
        $pam_loc = "photo/" . $image_name;
        $errorCOde = move_uploaded_file($image_name, $pam_loc);
        echo "$image_name,$pam_loc <br>";
        var_dump($errorCOde . "<br>");
        // if (move_uploaded_file($image_name, $pam_loc)) {
        //     echo "Success Upload" . '<br>';
        // } else {
        //     echo "Fail Upload" . '<br>';
        // }
        echo "YOur name is $name. Your password is $password. Your Profile Type is $picture";
        echo "<br>" . "You are a valid user.";
    }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

</html>