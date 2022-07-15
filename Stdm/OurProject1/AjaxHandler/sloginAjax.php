<?php

$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath . "/Stdm/OurProject1/DBHandler/DBuser_details.php";

$dbo = new DBStudentDetails();
$action = $_POST["action"];
$un = $_POST["username"];
$pw = $_POST["password"];
$status_login = "";

if ($action == "loginHandler") {

    $ids = $dbo -> getId($un, $pw);
    $user_id = $ids["userid"];
    $table_id = $ids["tableid"];
    // session_start();
    // $_SESSION["user_id"] = $user_id;
    // $_SESSION["table_id"] = $table_id;
    if ($user_id != -1) {
        $status_login = "OK";
    } else {
        $status_login = "Not matched";
    }
    $rv = array("status" => $status_login, "userid" => $user_id, "username" => $un
                , "tableid" => $table_id); //associative array.
    echo json_encode($rv); //return as json object
    exit;
}
