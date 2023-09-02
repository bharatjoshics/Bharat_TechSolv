<?php
    //Inputs
    if(isset($_POST['submit']))
    {
        $Name = $_POST['name'];
        $Phone = $_POST['phone'];
        $Email = $_POST['email'];
        $Subject = $_POST['subject'];
        $Message = $_POST['message'];
    }

    //Database
    $host = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'contact_form';

    //Connection
    $con = mysqli_connect($host, $username, $password, $dbname);

    //Check
    if(!$con)
    {
        die("Connection fail" . mysqli_connect_error());
    }

    //Query
    $sql = "INSERT INTO contact_form (Full_Name,Phone_Number,Email,Subject__,Message__) VALUES ('0','$Name','$Phone','$Email','$Subject','$Message')";

    //Send Query to Database
    $done = mysqli_query($con, $sql);

    if($done)
    {
        echo "Entry Added";
    }

    //Close
    mysqli_close($con);
?>