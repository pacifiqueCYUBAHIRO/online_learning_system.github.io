<?php
$con = mysqli_connect("localhost","root","","group");

$username = mysqli_real_escape_string($con,$_POST['username']);
$password = mysqli_real_escape_string($con,$_POST['password']);
$result = mysqli_query($con,"SELECT * FROM signup where username='$username' and password='$password'");

$row = mysqli_fetch_array($result);
   if($row){
    echo '<script type="text/javascript">
            window.location = "http://localhost/group/student.html" 
        </script>';
   } else {
    echo "Please Enter the correct values as you defined";
   }
    mysqli_close($con);
?>