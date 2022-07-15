<?php

$rootpath=$_SERVER["DOCUMENT_ROOT"];
require $rootpath."/Stdm/ourproject1/DBHandler/DBConnection.php";
// error_reporting(E_ERROR | E_PARSE);
// ini_set('display_errors', 0);

$dbo = new DBConnect();
// $connect = mysqli_connect("localhost", "csb53", "1234", "ourdb");
$output = '';
if(isset($_POST["query"]))
{
//  $search = mysqli_real_escape_string($connect, $_POST["query"]);
//  $search = $dob->conn->prepare($_POST["query"]);
 $search = $_POST["query"];
 $query = "
  SELECT * FROM alumni_details 
  WHERE name LIKE '%".$search."%'
  OR company LIKE '%".$search."%' 
  OR location LIKE '%".$search."%'
  OR post LIKE '%".$search."%'
  OR phone LIKE '%".$search."%'
 ";

$result = $dbo->conn->prepare($query);
$result->execute();
if($result->rowCount() > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered" style="color:white;
    font-size: 16px; font-weight: 600;">
    <tr>
     <th>Alumnus Name</th>
     <th>Company</th>
     <th>Location</th>
     <th>Post</th>
     <th>Phone</th>
    </tr>
 ';
 while($row = $result->fetch(PDO::FETCH_ASSOC))
 {
  $output .= '
   <tr>
    <td>'.$row["name"].'</td>
    <td>'.$row["company"].'</td>
    <td>'.$row["location"].'</td>
    <td>'.$row["post"].'</td>
    <td>'.$row["phone"].'</td>
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}
}
