<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="/Stdm/OurProject1/CSS/BootStrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="/Stdm/OurProject1/CSS/mycss1.css" /> -->
  <link rel="stylesheet" href="/Stdm/OurProject1/CSS/home.css">

  <title>Student Login</title>
</head>

<body>

  <div class="nav">
    <div class="welcome-tag">
      <h3>ALUMNI<br>MANAGEMENT<br>SYSTEM</h3>
    </div>

    <!-- NAVIGATION MENU -->
    <ul class="nav-links">
      <!-- NAVIGATION MENUS -->
      <div class="menu">
        <li><a href="slogin.php">Home</a></li>
        <li><a href="adminLogin.php">Admin</a></li>
      </div>
    </ul>
  </div>

  <section class="vh-50 bg-image">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="margin-top:5%;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Admin Sign-In</h2>
                <form>
                  <div class="mb-3">
                    <label for="rollno." class="form-label" style="padding-left: 5px">Admin Username
                      </label>
                    <input type="text" class="form-control" id="admin_un" aria-describedby="emailHelp">
                  </div>
                  <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label" style="padding-left: 5px;">Password</label>
                    <input type="password" class="form-control" id="admin_pw">
                  </div>
                  <button type="button" class="btn btn-primary" id="btn-login-admin">Login</button>
                  <div id="lbl-validity" style="margin-top: 20px"> </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  </div>

  <script src="/Stdm/OurProject1/Jquery/jquery.js">
  </script>
  <script src="/Stdm/OurProject1/UserInterface/SignIn/slogin.js"></script>
  <script src="/Stdm/OurProject1/CSS/BootStrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>