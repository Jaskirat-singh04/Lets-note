<?php 
    session_start();

    require '_connectdb.php';

    if(isset($_POST['saverequest']) && $_POST['saverequest'] == true)
    {
        $filename = $_POST['filename'];
        $filetext = $_POST['filetext'];
        $username = $_SESSION['username'];
        $encodedContent = base64_encode($filetext);

        $query = "INSERT INTO `notestable` (`filename`, `filetext`, `username`, `date`) VALUES ('$filename', '$encodedContent', '$username', current_timestamp())";
        $result = mysqli_query($conn, $query);

        if($result)
        {
            echo "Note Saved Successfully";
        }
        else
        {
            echo "Note Doen't Saved beacause of this error --> ".mysqli_error($conn);
        }
    }       
?>