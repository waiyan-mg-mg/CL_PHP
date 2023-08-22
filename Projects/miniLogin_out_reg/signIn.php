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
        <h1 class="text-center">Sing In</h1>
        <div class="row ">
            <div class="col-md-3  mt-5">
                <a type="button" href="signIn.php" class="w-75 d-block btn btn-primary mb-3" role="button">Sign
                    In</a>
                <a type="button" href="signup.php" class="w-75 d-block btn btn-success mb-3" role="button">Sign
                    Up</a>
                <a type="button" href="logOut.php" class="w-75 d-block btn btn-danger mb-3" role="button">Sign
                    Out</a>
            </div>
            <div class="col-md-8 mt-5 ">
                <form class="w-50 mx-auto" method="POST">
                    <div class="mb-3">
                        <label for="mail" class="form-label">Email:</label>
                        <input name="eamil" type="email" class="form-control" id="mail" aria-describedby="mailHelp">
                        <div id="mailHelp" class="form-text">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="pass" class="form-label">Password:</label>
                        <input name="password" type="password" class="form-control" id="pass">
                    </div>
                    <!-- <div class="mb-3 form-check">
                        <input name="stayLogin" type="checkbox" class="form-check-input" id="check">
                        <label class="form-check-label" for="check">Remember me for 1 min</label>
                    </div> -->
                    <button type="submit" name='submit' class="btn btn-primary">Enter</button>
                </form>
            </div>
        </div>

    </section>
</body>
<?php
if (isset($_POST['submit'])) {
    $user_mail     = $_POST['eamil'];
    $usr_pass    = $_POST['password'];
    $hashed_mail = $_COOKIE['user_mail'];
    $hashed_pass  = $_COOKIE['user_pass'];
    if (password_verify($user_mail, $hashed_mail) && password_verify($usr_pass, $hashed_pass)) {
        header("Location:userpage.php");
    }
}
?>

</html>