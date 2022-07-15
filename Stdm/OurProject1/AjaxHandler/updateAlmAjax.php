<?php
// echo "Working";
$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath . "/Stdm/OurProject1/DBHandler/DBuser_details.php";

$action = $_POST["action"];
$new_company = $_POST["company"];
$new_role = $_POST["role"];
$new_phone = $_POST["phone"];
$new_loc = $_POST["loc"];

if($action == "updateHandler"){

    $dbo = new updateAlmInfo();
    $res = $dbo->updateAlm($new_company, $new_role, $new_phone, $new_loc);
    // $res = array('role' => $new_role, 'company' => $new_company
    //             ,'phone' => $new_phone);
    echo json_encode($res);
}
