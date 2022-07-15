<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Stdm/OurProject1/CSS/mycss.css">

</head>

<body>
    <?php
    session_start();
    session_destroy();
    ?>
    <div class="signout-main">
        <h2 class="logout-msg">You have been logged out!</h2>
        <a href="/Stdm/OurProject1/UserInterface/SignIn/slogin.php">
            <button class = "goback-login">Go back</button>
        </a>
    </div>

</body>

</html>

