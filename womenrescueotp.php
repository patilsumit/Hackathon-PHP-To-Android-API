<?php
$wcontact =$_GET['wcontact'];
$otp =$_GET['otp'];
$rdetails=$_GET['rdetails'];

$con=mysqli_connect("localhost","id4996493_sumit","sumit","id4996493_womendb");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}


 $result = mysqli_query($con,"SELECT * FROM assign where wcontact='$wcontact' AND otp='$otp'"); 
 
if($result == true) {
    echo '{"query_result":"SUCCESS"}';
   $result1 = mysqli_query($con,"update assign  set status='YES' where wcontact='$wcontact'");
    $result2 = mysqli_query($con,"update assign  set rdetails='$rdetails' where wcontact='$wcontact'");
}
else{
    echo '{"query_result":"FAILURE"}';
}

   mysqli_close($con);

?>