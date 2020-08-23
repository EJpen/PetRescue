<?php
    require_once 'Connection.php';

    $user_id=$_POST['iduser'];
    $fullname=$_POST['fullname'];
    $username=$_POST['username'];
    $completeaddress=$_POST['completeaddress'];
    $contactno=$_POST['contactno'];

    $query="UPDATE user_details SET username='$username',
            full_name='$fullname',
            username='$username',
            complete_address='$completeaddress',
            contact_no='$contactno'

            WHERE user_id='$user_id'";

        $exeQuery = mysqli_query($con, $query);

        if($exeQuery){
            echo (json_encode(array('code' => 1, 'message' => 'Modification Success!')));
        }else {
            echo (json_encode(array('code' => 2, 'message' => 'Modification Failed!')));
        }
        
?>