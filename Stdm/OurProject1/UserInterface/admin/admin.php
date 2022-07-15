<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/Stdm/OurProject1/CSS/mycss.css">
    <link href="/Stdm/OurProject1/CSS/BootStrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Stdm/OurProject1/CSS/mycss.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <!-- <?php
        // session_start();
        // if($_SESSION['admin-login'] == -1);
        //      header("Location: /Stdm/OurProject1/UserInterface/SignIn/slogin.php");
        ?> -->
    <div class="nav">
        <div class="welcome-tag">
            <h3>Welcome Admin</h3>
            <p>Prince Swargiary</p>
        </div>

        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li><a href="/stdm/OurProject1/UserInterface/admin/admin.php">Home</a></li>

                <div class="dropdown">
                    <li class="dropbtn">Events</li>
                    <div class="dropdown-content">
                        <a id="post-event" href="postevent.php">Post Announcements</a>
                        <a id="check-event-admin" style="color:black; cursor: pointer">Check Events</a>
                    </div>
                </div>
                
                <li><a href="signout.php">Sign Out</a></li>
            </div>
        </ul>
    </div>
    <div id="main-admin" style = "color: white; width: 50%; margin: auto; text-align:center">


    <script src="/Stdm/OurProject1/CSS/BootStrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Stdm/OurProject1/Jquery/jquery.js"></script>
    <script src="admin.js"></script>
</body>

</html>