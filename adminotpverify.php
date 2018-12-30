<?php
$con=mysqli_connect("localhost","id4996493_sumit","sumit","id4996493_womendb");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
 

$otp = $_GET['otp'];
$contact=$_GET['contact'];

$result = mysqli_query($con,"select * from rescue where contact='$contact' AND  otp='$otp'");
 
if($result == true) {
    echo '{"query_result":"SUCCESS"}';
    $result = mysqli_query($con,"update rescue  set status='YES' where contact='$contact'");
}
else{
    echo '{"query_result":"FAILURE"}';
}
mysqli_close($con);
?>