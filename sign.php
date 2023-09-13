<?php
$name=filter_input(INPUT_POST,'name');
$email = filter_input(INPUT_POST, 'email');
$password = filter_input(INPUT_POST, 'password');
if (!empty($email)){
if (!empty($password)){
$host = "localhost";
$dbemail = "root";
$dbpassword = "";
$dbname = "college";
// Create connection
$conn = new mysqli ($host, $dbemail, $dbpassword, $dbname);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO prince ( name,email, password)
values ('$name','$email','$password')";
if ($conn->query($sql)){
echo "You are Register sucessfully."."<br/>";
?>
<a href="sign.html">Click Here</a>
<?php
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>