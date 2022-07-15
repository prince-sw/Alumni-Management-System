<?php
$rootpath = $_SERVER["DOCUMENT_ROOT"];
require_once $rootpath."/Stdm/OurProject1/DBHandler/DBstudent_details.php";

$dbo = new DBStudentDetails();

$rv = $dbo->getId("CSB19001", "abc123");

echo($rv)

?>