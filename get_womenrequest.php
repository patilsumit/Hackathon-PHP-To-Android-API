<?php

$wcontact = $_GET['wcontact'];
$lati= $_GET['lati'];
$lang= $_GET['lang'];
$rc=9099073866;

$wc=$wcontact;
$con=mysqli_connect("localhost","id4996493_sumit","sumit","id4996493_womendb");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}

$time=date("h:i:sa");
$date=date("Y-m-d");
 
 $result = mysqli_query($con,"INSERT INTO request (wcontact,time,date,lati,lang) 
          VALUES ('$wcontact','$time','$date','$lati','$lang')"); 
if($result == true) {
    echo '{"query_result":"SUCCESS"}';
    
    
   
}
else{
    echo '{"query_result":"FAILURE"}';
}

$stmt =mysqli_query($con,"SELECT *, (6371 * acos(cos(radians($lati)) * cos(radians(lati)) * cos(radians(lang) - 
   radians($lang)) + 
   sin(radians($lati)) * 
   sin(radians(lati )))
) AS distance 
FROM rescue WHERE situation='free'
HAVING distance < 100
ORDER BY distance LIMIT 0, 20");

while ($row = mysqli_fetch_array($stmt))
{
    
     $rcontact= $row["contact"];
     $rc=$rcontact;
     $result1 = mysqli_query($con,"update rescue set situation='busy' where contact='$rcontact'"); 
     
}

    $string = 'abcdefghijklmnopqrstuvwxyz0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $string_shuffled = str_shuffle($string);
    $password = substr($string_shuffled, 0, 6);
    $status='NO';
 
 
    $result2 = mysqli_query($con,"INSERT INTO assign (wcontact,rcontact,otp,status) 
          VALUES ('$wcontact','$rcontact','$password','$status')"); 




   mysqli_close($con);

?>

