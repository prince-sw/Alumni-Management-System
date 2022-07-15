<?php
// echo "Working";
$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath . "/Stdm/OurProject1/DBHandler/DBuser_details.php";

$action = $_POST["action"];
$new_username = $_POST["usrname"];
$new_roll = $_POST["roll"];
$new_phone = $_POST["phone"];
if($action == "updateHandler"){

    $dbo = new updateStdInfo();
    $res = $dbo->updateStd($new_username, $new_roll, $new_phone);
    // $res = array('roll' => $new_roll, 'username' => $new_username
    //             ,'phone' => $new_phone);
    echo json_encode($res);
}
