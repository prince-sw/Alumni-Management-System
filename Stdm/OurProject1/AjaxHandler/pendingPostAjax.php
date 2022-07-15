<?php

$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath. "/Stdm/OurProject1/DBHandler/DBEvents.php";


$action = $_POST["action"];
$title = $_POST["title"];
$date = $_POST["date"];
$description = $_POST["desc"];

if ($action == "postHandler") {
    $obj = new pendingPost();
    $id = $obj->addPendingPost($title, $date, $description);
    // $id = $ob1->getIdforsignup($rno, $pw, $un, $pno);
    // $id = 1;
    // $rno, $pw, $un, $pno

//     if ($id === 1) {
//         $status_login = "Account Created!";
//     } else {
//         $status_login = "Account couldn't be created";
//     }
    // $rv = array("id" => $id); //associative array.
    echo json_encode($id); //return as json object
    exit;

}
