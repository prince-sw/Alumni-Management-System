<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/Stdm/OurProject1/CSS/mycss.css">
    <link href="/Stdm/OurProject1/CSS/BootStrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.0.0/mdb.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="/Stdm/OurProject1/CSS/mycss.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>

<body>

    <!-- <div class="navbar">
        <div class="logo">
            <h3 style="font-size: 18px; color: black; padding-left:2px">Welcome</h3>
        </div> -->

    <div class="nav">
        <div class="welcome-tag">
            <h3>Welcome Alumni</h3>
            <?php
            error_reporting(E_ERROR | E_PARSE);
            session_start();
            // echo $_SESSION['table-id'];
            if (!isset($_SESSION['almname-login'])) {
                header("Location: /Stdm/OurProject1/UserInterface/SignIn/slogin.php");
            } else {
                echo $_SESSION['almname-login'] . $_SESSION['alm-id'];
            }
            ?>
        </div>

        <!-- NAVIGATION MENU -->
        <ul class="nav-links">
            <!-- NAVIGATION MENUS -->
            <div class="menu">
                <li><a href="alumnihome.php">Home</a></li>

                <div class="dropdown">
                    <li class="dropbtn">Events</li>
                    <div class="dropdown-content">
                        <a id="post-event" href="postevent.php">Post Event</a>
                        <a id="check-event" style="color: black">Check Events</a>
                    </div>
                </div>

                <div class="dropdown">
                    <li class="dropbtn">Dropdown</li>
                    <div class="dropdown-content">
                        <a id="update-info" href="updateAlmInfo.php">Update Info</a>
                        <a href="signout.php">Sign Out</a>
                    </div>
                </div>
            </div>
        </ul>
    </div>

    <section class="search-box">
        <div class="container">
            <h2>Search For Alumni</h2><br />
            <div class="form-group">
                <div class="input-group-lg">
                    <span class="input-group-addon"></span>
                    <input type="text" name="search_text" id="search_text" placeholder="Search by Name/Company/Location" class="form-control" />
                </div>
            </div>
            <br />
            <div id="result"></div>
        </div>
    </section>

    <section class="show-events">
        <div class="container">
            <h2>Events availabe</h2><br />
            <br />
            <div id="result"></div>
        </div>
    </section>


    <script src="/Stdm/OurProject1/CSS/BootStrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Stdm/OurProject1/Jquery/jquery.js"></script>
    <script src="userhome.js"></script>
</body>

</html>