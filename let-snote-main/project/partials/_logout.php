<?php 
    if(isset($_POST['logoutRequest']) && $_POST['logoutRequest'] == true)
    {
        session_start();

        session_unset();
        session_destroy();
    }
?>