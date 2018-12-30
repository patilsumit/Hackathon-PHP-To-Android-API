<?php
 
/*
 * Following code will get single product details
 * A product is identified by product id (pid)
 */
 
// array for JSON response
$response=array();
 
// include db connect class

$con=mysqli_connect("localhost","id4996493_sumit","sumit","id4996493_womendb");
if (mysqli_connect_errno($con))
{
   echo '{"query_result":"ERROR"}';
}
$rcontact=9099073865;
 
// connecting to db

    $result1 = mysqli_query($con,"select * from rescue where contact='$rcontact'");
 
    if (!empty($result1)) {
        // check for empty result
        if (mysqli_num_rows($result1) > 0) {
 
            $result = mysqli_fetch_array($result1);
 
            $product = array();
            $product["rid"] = $result["rid"];
            $product["rname"] = $result["rname"];
            $product["address"] = $result["address"];
            $product["city"] = $result["city"];
            $product["state"] = $result["state"];
            $product["contact"] = $result["contact"];

            
            // success
            $response["success"] = 1;
 
            // user node
            $response["product"] = array();
 
            array_push($response["product"], $product);
 
            // echoing JSON response
            echo json_encode($response);
        } else {
            // no product found
            $response["success"] = 0;
            $response["message"] = "No product found";
 
            // echo no users JSON
            echo json_encode($response);
        }
    } else {
        // no product found
        $response["success"] = 0;
        $response["message"] = "No product found";
 
        // echo no users JSON
        echo json_encode($response);
    }
/*} else {
    // required field is missing
    $response["success"] = 0;
    $response["message"] = "Required field(s) is missing";
 
    // echoing JSON response
    echo json_encode($response);
}*/
?>