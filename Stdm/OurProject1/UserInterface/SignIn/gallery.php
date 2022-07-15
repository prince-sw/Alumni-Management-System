<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>
</head>

<body>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto&display=swap');

        .body {
            font-family: 'Roboto', sans-serif;
            letter-spacing: 0.2em;
        }

        .main {
            width: 90%;
            margin: auto;
            margin-top: 5%;
            display: flex;

        }

        div.gallery {
            border: 1px solid #ccc;
        }

        div.gallery:hover {
            border: 1px solid #777;
        }

        div.gallery img {
            width: 100%;
            height: auto;
        }

        div.desc {
            padding: 15px;
            text-align: center;
        }

        * {
            box-sizing: border-box;
        }

        .responsive {
            padding: 0 6px;
            float: left;
            width: 24.99999%;
        }

        @media only screen and (max-width: 700px) {
            .responsive {
                width: 49.99999%;
                margin: 6px 0;
            }
        }

        @media only screen and (max-width: 500px) {
            .responsive {
                width: 100%;
            }
        }

        .clearfix:after {
            content: "";
            display: table;
            clear: both;
        }
    </style>

    <h1 style="text-align: center; margin-top: 5%;">TU GALLERY</h1>
    <div class="main">

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="/stdm/ourproject1/res/1.jpg">
                    <img src="/stdm/ourproject1/res/1.jpg" alt="1" width="600" height="400">
                </a>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="/stdm/ourproject1/res/2.jpg">
                    <img src="/stdm/ourproject1/res/2.jpg" alt="1" width="600" height="400">
                </a>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="/stdm/ourproject1/res/5.jpg">
                    <img src="/stdm/ourproject1/res/5.jpg" alt="Forest" width="600" height="400">
                </a>
            </div>
        </div>

        <div class="responsive">
            <div class="gallery">
                <a target="_blank" href="/stdm/ourproject1/res/4.jpg">
                    <img src="/stdm/ourproject1/res/4.jpg" alt="Forest" width="600" height="400">
                </a>
            </div>
        </div>

        <div class="clearfix"></div>
    </div>
</body>

</html>