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
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 id = "post-header" class="text-uppercase text-center mb-5">Add a Post
                                </h2>
                                <form>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="post-title" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Post Title</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" id="post-time" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Date/Time</label>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Description</label>
                                        <textarea class="form-control" id="post-description" rows="3"></textarea>
                                    </div>
                                    <br>
                                    <div class="d-flex justify-content-center">
                                        <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" id="btn_post_req">Submit</button>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="/Stdm/OurProject1/Jquery/jquery.js"></script>
    <script src="/Stdm/OurProject1/CSS/BootStrap/js/bootstrap.bundle.min.js"></script>
    <script src="userhome.js"></script>
</body>

</html>