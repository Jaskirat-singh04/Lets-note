<?php require 'partials/_connectdb.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login/Signup</title>
    <link rel="icon" href="favicon.png" type="image/icon type">

    <!-- css files -->
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="waves.css?v=<?php echo time(); ?>">

    <!-- font awesome script -->
    <script src="https://kit.fontawesome.com/76448c9004.js" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body>
    <?php require 'partials/_header.php'; ?>

    <div class="form-container">
        <div class="signup">
            <h1>
                Signup
            </h1>
            <form>
                <label for="name">*Username :</label>
                <input type="text" name="username" id="username" placeholder="Enter Username"></input>

                <label for="email">*Email :</label>
                <input type="email" name="email" id="email" placeholder="Enter email here"></input>

                <label for="email">*Create Password :</label>
                <input type="password" name="password" id="password" placeholder="Create Password"></input>

                <label for="email">*Confirm Password :</label>
                <input type="password" name="cnpassword" id="cnpassword" placeholder="Confirm Password"></input>

                <input type="button" id="signup-btn" value="Signup"></input>
            </form>

            <button class="loginform">Already Have An Account? Login From Here!</button>
        </div>

        <div class="login">
            <h1>
                Login
            </h1>
            <form>
                <label for="name">*Username :</label>
                <input type="text" name="lusername" id="lusername" placeholder="Enter Username"></input>

                <label for="email">*Password :</label>
                <input type="password" name="lpassword" id="lpassword" placeholder="Enter Password"></input>

                <input type="button" id="login-btn" value="Login"></input>
            </form>

            <button class="signupform">Don't Have Any Account? Signup From Here!</button>
        </div>
    </div>

    <!-- Javascript files  -->
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="script.js"></script>
    <script src="index.js"></script>

    <script src="https://raw.githack.com/eKoopmans/html2pdf/master/dist/html2pdf.bundle.js"></script>
</body>

</html>