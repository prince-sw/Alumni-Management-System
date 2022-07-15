<?php

$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath . "/Stdm/OurProject1/DBHandler/DBuser_details.php";

$action = $_POST["action"];
$input_txt = $_POST["input"];
$searchObj = new DBsearchforUser();

if($action == "searchUser"){
    
    $output = $searchObj -> searchUser($input_txt);
    $rv = array('un' => $output['name'], 'loc' => $output['loc']
                ,'company' => $output['company'], 'role'=>$output['role']);
    // $rv = "hello";
    echo json_encode($rv);
}