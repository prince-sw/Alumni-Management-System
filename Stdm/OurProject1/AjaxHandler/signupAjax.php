<?php

$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath. "/Stdm/OurProject1/DBHandler/DBsignup.php";

$ob1 = new doSignUp();
$action = $_POST["action"];
$un = $_POST["name"];
$pw = $_POST["password"];
$pno = $_POST["phone"];
$rno = $_POST["rollno"];

if ($action == "signupHandler") {
    $id = $ob1->getIdforsignup($rno, $pw, $un, $pno);
    // $id = 1;
    // $rno, $pw, $un, $pno

//     if ($id === 1) {
//         $status_login = "Account Created!";
//     } else {
//         $status_login = "Account couldn't be created";
//     }
    $rv = array("id" => $id); //associative array.
    echo json_encode($rv); //return as json object
    exit;

}
