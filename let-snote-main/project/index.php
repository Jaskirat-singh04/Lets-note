<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Let's Note: Home</title>
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="waves.css?v=<?php echo time(); ?>">
    <link rel="icon" href="favicon.png" type="image/icon type">

    <!-- font awesome script -->
    <script src="https://kit.fontawesome.com/76448c9004.js" crossorigin="anonymous"></script>
</head>

<body class="mobile">
    <!--including header file -->
    <?php require 'partials/_header.php'; ?>

    <section class="main">
        <h1 class="center" id="headline">
            Welcome To LET's Note
        </h1>
        <div id="info">
            <p id="info_start">Click on the Mic icon and begin/end speaking.</p>
            <p id="info_speak_now">Speak now.</p>
            <p id="info_no_speech">No speech was detected. You may need to adjust your
                <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                    microphone settings</a>.
            </p>
            <p id="info_no_microphone" style="display:none">
                No microphone was found. Ensure that a microphone is installed and that
                <a href="//support.google.com/chrome/bin/answer.py?hl=en&amp;answer=1407892">
                    microphone settings</a> are configured correctly.
            </p>
            <p id="info_allow">Click the "Allow" button above to enable your microphone.</p>
            <p id="info_denied">Permission to use microphone was denied.</p>
            <p id="info_blocked">Permission to use microphone is blocked. To change,
                go to chrome://settings/contentExceptions#media-stream</p>
            <p id="info_upgrade">Web Speech API is not supported by this browser.
                Upgrade to <a href="//www.google.com/chrome">Chrome</a>
                version 25 or later.</p>
        </div>
        <div class="right">
            <button id="start_button" onclick="startButton(event)">
                <i class="fas fa-microphone-alt" onclick="toggle()"></i>
                <i class="fas fa-redo" onclick="reload()"></i>
            </button>
        </div>
        <div class="fields">
            <input type="text" name="heading" placeholder="Enter Name"></input>
            <div id="results">
                <span id="final_span" class="final"></span>
                <span id="interim_span" class="interim"></span>
            </div>
        </div>
        <div class="center">
            <div class="options">
                <div class="sidebyside">
                    <button id="copy_button" class="button" onclick="copyButton()">
                        Select All</button>
                    <div id="copy_info" class="info">
                        Selected
                    </div>
                </div>
                <div class="sidebyside">
                    <button id="email_button" class="button" onclick="emailButton()">
                        Create Email</button>
                    <div id="email_info" class="info">
                        Text sent to default<br> email application.
                    </div>
                </div>
                <div class="sidebyside">
                    <button id="pdf_button" class="button" onclick="createpdf()">
                        Create PDF</button>
                </div>
                <!-- button to save pdf to database -->
                <?php 
                    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
                    {   
                        echo '<div class="sidebyside">
                                    <button id="save_button" class="button save"> Save</button>
                                </div>';
                    }
                ?>
            </div>
            <div id="div_language">
                <select id="select_language" onchange="updateCountry()"></select>
                &nbsp;
                <select id="select_dialect"></select>
            </div>
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