<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password hash</title>
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
        <div class="text-center">
            <button class="btn btn-primary" name="submit" value="save" type="submit">Submit form</button>
        </div>

    </form>
    <?php
    $adm_mail = "admin@admin";
    $adm_pass = "$2y$10$/iHySKdJYWVr1DnJJE6Cb.a5m.4Z7FLVYnR7CbSk5mcIAhZosxEry";
    if (isset($_POST['submit'])) {
        $inputMail = $_POST['email'];
        $inpuPass =  $_POST['password'];
        if ($inputMail == $adm_mail && password_verify($inpuPass, $adm_pass)) {
            echo "login success";
        } else {
            echo "login fail";
        }
    }

    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
</script>

</html>