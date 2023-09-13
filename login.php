<?php

$host = "localhost";
$dbemail = "root";
$dbpassword = "";
$dbname = "college";
// Create connection
$conn = new mysqli ($host, $dbemail, $dbpassword, $dbname);
if(!$conn)
{
    echo "connection faild".mysqli_connect_error();
    exit;
}
$email=$_POST['email'];
$password=$_POST['password'];


    $sql="SELECT * FROM prince WHERE email='$email' AND password='$password'";
    $result=mysqli_query($conn,$sql);
    if(!$result)
    {
        echo "error".mysqli_error($conn);
        exit;
    }
    $row=mysqli_fetch_assoc($result);
    if($row)
    {

        echo "Welcome= ".$row['name']."<br/>";
        ?>
        <a href="index.html">click here</a>;
        <?php
    }
    else{
        echo "login faild";
    }
    
    mysqli_close($conn);
?>