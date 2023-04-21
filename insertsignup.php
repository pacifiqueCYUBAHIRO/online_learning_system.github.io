
<?php
$con=mysqli_connect("localhost","root","","group");
// Check connection
if (mysqli_connect_errno()) {
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
// escape variables for security
$email = mysqli_real_escape_string($con, $_POST['email']);
$username = mysqli_real_escape_string($con, $_POST['username']);
$password = mysqli_real_escape_string($con, $_POST['password']);

 $sql="INSERT INTO signup (email, username, password) 
 VALUES ('$email', '$username', '$password')";
if (!mysqli_query($con,$sql)) {
 die('Error: ' . mysqli_error($con));
}
 echo " Acoount created Successfully";
 mysqli_close($con);
 ?>