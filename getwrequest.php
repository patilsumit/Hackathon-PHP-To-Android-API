<?php

$rcontact = $_GET['rcontact'];
$lati= $_GET['lati'];
$lang= $_GET['lang'];

$con=mysqli_connect("localhost","id4996493_sumit","sumit","id4996493_womendb");
if (mysqli_connect_errno($con))
{
   
}

   $result = mysqli_query($con,"update rescue set lati='$lati',lang='$lang' where contact='$rcontact'"); 
 
     $result1=mysqli_query($con,"SELECT wcontact FROM assign where rcontact='$rcontact'");

   $result2 = mysqli_fetch_array($result1);
 
    echo $result2["wcontact"];
    
            
            
            

            
        

?>