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
                                    <h2 class="text-uppercase text-center mb-5" id = "update-title">Update Info
                                         <?php
                                        session_start();
                                        echo $_SESSION['alm-id'];
                                        ?> 
                                    </h2>

                                    <form>
            

                                        <div class="form-outline mb-4">
                                            <input type="text" id="alm_update_company" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example3cg">Working at</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="alm_update_role" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example4cdg">Working as</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="alm_update_loc" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example4cdg">Current Location</label>
                                        </div>

                                        <div class="form-outline mb-4">
                                            <input type="text" id="alm_update_phone" class="form-control form-control-lg" />
                                            <label class="form-label" for="form3Example4cdg">Phone number</label>
                                        </div>

                                        <div class="d-flex justify-content-center">
                                            <button type="button" class="update_btn btn-success btn-block btn-lg gradient-custom-4 text-body" 
                                            style= "color: white" id="alm_update_btn">Update</button>
                                        </div>
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
    <script src="userhome.js"></script>

</body>

</html>