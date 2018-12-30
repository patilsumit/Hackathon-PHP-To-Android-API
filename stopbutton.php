<?php
$wcontact =$_GET['wcontact'];

$con=mysqli_connect("localhost","id4996493_sumit","sumit","id4996493_womendb");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}


 $result = mysqli_query($con,"SELECT * FROM assign where wcontact='$wcontact'"); 
 
 while ($row = mysqli_fetch_array($result))
{
    
     $rcontact= $row["rcontact"];
     $otp=$row["otp"];
}


  /*
    $username = "patilsumit2020@gmail.com";
	$hash = "e33798352a2bef0fb3f738e8f5218bb0b5604bf27bca09b8b6011a9dc00a9d1e";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$rcontact"; // A single number or a comma-seperated list of numbers
	$message = "This is Current Otp:". $otp;
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	*/
	
if($result == true) {
    echo '{"query_result":"SUCCESS"}';
   
}
else{
    echo '{"query_result":"FAILURE"}';
}

   mysqli_close($con);

?>