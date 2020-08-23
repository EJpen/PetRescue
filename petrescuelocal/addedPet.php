<?php
require_once 'Connection.php';

if ($_SERVER['REQUEST_METHOD']=="POST") {

    $response = array();
    $name = $_POST['name'];
    $owner = $_POST['owner'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $user_id = $_POST['user_id'];

        $insert = "INSERT INTO pet_details VALUE(NULL, '$name', '$owner', '$contact', '$address', NOW(),'$user_id')";
        if (mysqli_query($con, $insert)){
            $response['value']=1;
            $response['message']="Successfully added";
            echo json_encode($response);
        }else{
            $response['value']=0;
            $response['message']="Failed to add";
            echo json_encode($response);
        }
}
?>