<?php

$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath . "/Stdm/ourproject1/DBHandler/DBConnection.php";
// error_reporting(E_ERROR | E_PARSE);
// ini_set('display_errors', 0);
$output = "";

$dbo = new DBConnect();
$query = "SELECT * FROM pending_events WHERE status = :stat";
$result = $dbo->conn->prepare($query);
$result->execute([":stat" => "passed"]);
if ($result->rowCount() > 0) {
    $output .= '
        <div class="table-responsive">
         <table class="table table bordered" style="color:white;
          font-size: 16px; font-weight: 600;">
          <tr>
           <th>TITLE</th>
           <th>DATE</th>
           <th>DESCRIPTION</th>
          </tr>
       ';
    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        $output .= '
          <td id = "row-title">' . $row["title"] . '</td>
          <td id = "row-date">' . $row["date"] . '</td>
          <td id = "row-desc">' . $row["description"] . '</td>
         </tr>
        ';
    }

} else {
    $output .= '<div class = "not-found-msg" 
         style="color:white; margin-top: 10%; letter-spacing: 0.2em;
         font-size: 28px; font-weight: 400;"
         >No Events to show :( </div>';
    
}
echo $output;
// if ($result->rowCount() > 0) {
//     $output .= '
//     <div class="table-responsive">
//      <table class="table table bordered" style="color:white;
//       font-size: 16px; font-weight: 600;">
//       <tr>
//        <th>TITLE</th>
//        <th>DATE</th>
//        <th>DESCRIPTION</th>
//       </tr>
//    ';
//     while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//         $output .= '
//       <td id = "row-title">' . $row["title"] . '</td>
//       <td id = "row-date">' . $row["date"] . '</td>
//       <td id = "row-desc">' . $row["description"] . '</td>
//      </tr>
//     ';
//     }
//     echo $output;
// } else {
//     $output .= '<div class = "not-found-msg" 
//          style="color:white; margin-top: 10%; letter-spacing: 0.2em;
//          font-size: 28px; font-weight: 400;"
//          >No Events to show :( </div>';
//     echo $output;
// }
