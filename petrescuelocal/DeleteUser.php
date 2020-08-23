<?php
    require_once 'Connection.php';

    $userid=$_POST['userid'];

    $query="DELETE FROM user_details WHERE user_id='$userid'";
        $exeQuery = mysqli_query($con, $query);

            if($exeQuery){
                echo (jcon_encode(array('code' => 1, 'message' => 'Success')));

            }else{
                echo (jcon_encode(array('code' => 2, 'message' => 'Failed')));
            }
?>