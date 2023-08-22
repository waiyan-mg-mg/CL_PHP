<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <section class="container bg-light p-md-5">
        <div class="row ">
            <div class="col-md-3  mt-5">
                <a type="button" href="signIn.php" class="w-75 d-block btn btn-primary mb-3" role="button">Sign
                    In</a>
                <a type="button" href="signup.php" class="w-75 d-block btn btn-success mb-3" role="button">Sign
                    Up</a>
                <!-- <a type="button" href="logOut.php" class="w-75 d-block btn btn-danger mb-3" role="button">Sign
                    Out</a> -->
            </div>
            <div class="col-md-8 mt-5 ">
                <h4 role="alert" class="alert alert-primary text-center">log out Success</h4>

            </div>
        </div>
    </section>
</body>
<?php
setcookie('user_mail', '', 1);
setcookie('user_pass', '', 1);
?>

</html>