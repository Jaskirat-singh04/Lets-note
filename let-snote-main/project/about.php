<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Note: Home</title>
    <link rel="icon" href="favicon.png" type="image/icon type">

    <!-- css files -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="waves.css?v=<?php echo time(); ?>">

    <style>
        .aboutus {
            text-align: center;
            font-size: 2rem;
            font-weight: 400;
            /* font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif; */
            margin-top: 50px;
        }

        #about p {
            /* text-align: center; */
            width: 100%;
            height: 45%;
            font-size: 20px;
            font-weight: 300;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            padding: 0.5rem 2.5rem;
            margin: 0.5rem 0;
        }

        .contact {
            margin: 2rem 0;
            text-align: center;
        }

        .contact h2 {
            font-size: 2rem;
            font-weight: 400;
            margin: 1rem auto;
        }

        .contact ul {
            display: flex;
            align-items: center;
            justify-content: center;
            flex-wrap: wrap;
            gap: 30px;
        }

        .contact ul li {
            list-style: none;
            font-size: 1.3rem;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: 300;
            cursor: pointer;
            margin: 0.5rem;
        }

        .contact ul li a {
            color: white;
            padding-left: 10px;
            text-decoration: none;
        }

        .contact ul li a:hover {
            font-weight: 600;
        }

        .mp4-video-inner {
            background-color: black;

        }

        #myVideoSection {
            /* margin-left: 70px; */
            float: none;
            display: block;
            max-width: 1900px;
            width: 100%;

        }

        #myVideoSection:focus {
            border: 0;
            outline: none;
        }

        video::-webkit-media-controls-fullscreen-button {
            display: none !important;

        }

        @media screen and (max-width:600px) {
            #myVideoSection {
                height: auto;
                margin: 20px auto;

            }
        }
    </style>

    <!-- font awesome script -->
    <script src="https://kit.fontawesome.com/76448c9004.js" crossorigin="anonymous"></script>
</head>

<body class="mobile">
    <!--including header file -->
    <?php require 'partials/_header.php'; ?>

    <!-------------------------- demo video of the site -------------------------->
    <div class="mp4-video-inner">
        <div class="row mp4-video-row">
            <div class="col-12 myVideoSection">
                <div class="video_section">
                    <video id="myVideoSection" height="650" controls autoplay>
                        <source src="demo.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </div>

    <!--------------------------- about section --------------------------->
    <section>
        <div id="about">
            <h1 class="aboutus"><i class="fas fa-users">&nbsp;</i>About Us</h1>
            <p> Greetings everyone. Let's Note web application is created by two enthusiastic students of S.G.T.B Khalsa
                College namely Jaskirat singh and Dinesh kumar.
            </p>
            <p>
                When was the last time you actually copied or written notes in
                your online class? I'm sure most of you say, we don't remember! Do you feel disconnected with your on
                going
                class topics because you don't remember what teacher's taught you in your previous class or You missed a
                class
                because of any reason. Don't worry we feel your pain , you don't have to worry about notes anymore.
            </p>
            <p>
                !! Yes you
                heard it right!!. We come up with an innovative & unique web application which will make a student life
                so
                smooth and time saving. Our application will convert your teacher's voice into text which you can be
                Downloaded
                in a PDF Format easily from our web application. Not only that, It will let you save your data(Notes)
                namely, in
                the form PDF in our system safely and with ease you will have the access to your notes for the lifetime.
                It is
                undoubtly, a great application which would let you save your notes in more than 60 language and sub
                language and
                saves your precious time. And you know what? It will be your notes buddy which will never cheat on you!
                It's
                also have Some amazing functionality such as you can directly emailing youe notes & PDF to anyone in the
                world.</p>
        </div>
    </section>

    <!--------------------------- contact section --------------------------->
    <section>
        <div class="contact">
            <h2><i class="fas fa-envelope">&nbsp;</i> Contact Us</h2>
            <ul>
                <li>
                    <a href="mailto:www.dineshk40@gmail.com">www.dineshk40@gmail.com</a>
                </li>
                <li>
                    <a href="mailto:jaskirat099901singh@gmail.com">jaskirat099901singh@gmail.com</a>
                </li>
            </ul>
        </div>
    </section>

    <!--including footer file -->
    <?php require 'partials/_footer.php'; ?>

    <!-- Javascript files  -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="main.js"></script>
    <script src="script.js"></script>
    <script src="index.js"></script>

    <!-- script for creating pdf -->
    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>

</body>

</html>