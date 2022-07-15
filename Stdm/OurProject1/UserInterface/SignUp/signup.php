<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="/Stdm/OurProject1/CSS/BootStrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

  <div id="reload_signup">
    <section class="vh-100 bg-image">
      <div class="mask d-flex align-items-center h-100 gradient-custom-3">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-12 col-md-9 col-lg-7 col-xl-6">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-5">
                  <h2 class="text-uppercase text-center mb-5">Sign Up As
                    <select id="mySelect">
                      <option value="Student">Student
                      <option value="Alumni">Alumni
                    </select>
                  </h2>

                  <form>

                    <div class="form-outline mb-4">
                      <input type="text" id="signup_name" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example1cg">Your Name</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="signup_roll" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example3cg">Your Roll</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="signup_phoneno" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example4cdg">Phone No.</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="signup_pw" class="form-control form-control-lg" />
                      <label class="form-label" for="form3Example4cg">Password</label>
                    </div>

                    <div class="form-check d-flex justify-content-center mb-5">
                      <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                      <label class="form-check-label" for="form2Example3g">
                        I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                      </label>
                    </div>

                    <div class="d-flex justify-content-center">
                      <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" style = "background-color: #157DEC; color: white" id="btn-signup">Register</button>
                    </div>

                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/Stdm/OurProject1/UserInterface/SignIn/slogin.php" class="fw-bold text-body"><u>Login here</u></a></p>

                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="/Stdm/OurProject1/Jquery/jquery.js"></script>
  <script src="/Stdm/OurProject1/CSS/BootStrap/js/bootstrap.bundle.js"></script>
  <script src="signup_std.js"></script>


</body>

</html>