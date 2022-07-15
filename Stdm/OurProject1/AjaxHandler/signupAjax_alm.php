<?php

$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath. "/Stdm/OurProject1/DBHandler/DBsignup.php";
$action = $_POST["action"];
$username = $_POST["name"];
$pass = $_POST["pass"];
$phone_no = $_POST["pno"];
$company_name = $_POST["company"];
$role_in_company = $_POST["role"];
$location = $_POST["loc"];

if ($action == "signup_alm") {
    
    $obj = new signup_for_alm();
    // $id = $obj->getIdforalm($username, $phone_no, $password, $company_name,
    //         $role_in_company, $location);
    $id = $obj ->getIdforalm($username, $phone_no, $company_name, $location,
                $role_in_company, $pass);
    $rv = array("id" => $id); //associative array.
    echo json_encode($rv); //return as json object
    exit;
}
