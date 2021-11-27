<?php 
    require '_connectdb.php';

    if(isset($_POST['signupRequest']) && $_POST['signupRequest'] == true)
    {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];

        $usernameExists = "SELECT * FROM `users` WHERE username = '$username'";
        $uresults = mysqli_query($conn, $usernameExists);
        $commonUsernames = mysqli_num_rows($uresults);

        $emailExists = "SELECT * FROM `users` WHERE email = '$email'";
        $eresults = mysqli_query($conn, $emailExists);  
        $commonEmails = mysqli_num_rows($eresults);


        if($commonUsernames>0 && $commonEmails>0)
        {
            echo "Username And Email Already Exists";
        }
        else if($commonUsernames>0)
        {
            echo "Username Already Exists";
        }
        else if($commonEmails>0){
            echo "Email Already Exists";
        }
        else{
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $signupsql = "INSERT INTO `users` (`username`, `email`, `password`, `date`) VALUES ('$username', '$email', '$hash', current_timestamp());";

            $signupresult = mysqli_query($conn, $signupsql);

            if($signupresult){
                echo "Account Created Succesfully";
            }
        }
    }    
?>