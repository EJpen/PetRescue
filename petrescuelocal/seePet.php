<?php

require_once 'Connection.php';

$response = array();

$sql = mysqli_query($con, "SELECT a.*, b.full_name FROM pet_details a
left join user_details b on a.user_id = b.user_id");
while ($a = mysqli_fetch_array($sql)) {

    $b['id'] = $a['id'];
    $b['name'] = $a['name'];
    $b['owner'] = $a['owner'];
    $b['image'] = $a['image'];
    $b['contact'] = $a['contact'];
    $b['address'] = $a['address'];
    $b['user_id'] = $a['user_id'];
    $b['full_name'] = $a['full_name'];

    array_push($response, $b);
}

echo json_encode($response);
?>