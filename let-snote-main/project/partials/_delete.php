<?php 
    session_start();

    require '_connectdb.php';

    if(isset($_POST['deleteRequest']) && $_POST['deleteRequest'] == true)
    {
        $username = $_SESSION['username'];
        $filename = $_POST['filename'];

        $query = "DELETE FROM `notestable` WHERE `notestable`.`filename` =  '$filename' AND `notestable`.`username` = '$username'";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            echo "Deleted successfully";
        }
        else{
            echo "Error in deleting --> ".mysqli_error($conn);
        }
    }
?>