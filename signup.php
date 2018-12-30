<?php
$con=mysqli_connect("localhost","id4996493_sumit","sumit","id4996493_womendb");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
 
$name= $_GET['name'];
$address = $_GET['address'];
$city = $_GET['city'];
$state = $_GET['state'];

$contact = $_GET['contact'];
$guardian_name = $_GET['guardian_name'];
$guardian_number = $_GET['guardian_number'];
$status="NO";

$string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string_shuffled = str_shuffle($string);
    $password = substr($string_shuffled, 0, 6);

/*

$username = "patilsumit2020@gmail.com";
	$hash = "e33798352a2bef0fb3f738e8f5218bb0b5604bf27bca09b8b6011a9dc00a9d1e";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	$numbers = "$contact"; // A single number or a comma-seperated list of numbers
	$message = "This is Current Otp:".$password;
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


$result = mysqli_query($con,"INSERT INTO women (name,address,city,state,contact,guardian_name,guardian_number,otp,status) 
          VALUES ('$name', '$address', '$city', '$state','$contact','$guardian_name','$guardian_number','$password','$status')");
 
if($result == true) {
    echo '{"query_result":"SUCCESS"}';
}
else{
    echo '{"query_result":"FAILURE"}';
}
mysqli_close($con);
?>