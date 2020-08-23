<?php
    require_once 'Connection.php';

    $full_name=$_POST['full_name'];
    $username=$_POST['username'];
    $complete_address=$_POST['complete_address'];
    $contact_no=$_POST['contact_no'];
    $password=$_POST['password'];

    $query="INSERT INTO user_details(full_name, username, complete_address, contact_no, password)
        VALUES ('$full_name', '$username', '$complete_address', '$contact_no', '$password')";
    $exeQuery = mysqli_query($con, $query);

    if($exeQuery){
        echo (json_encode(array('code' => 1, 'message' => 'Success')));

    }else{
        echo (json_encode(array('code' => 2, 'message' => 'Failed')));
    }
?>