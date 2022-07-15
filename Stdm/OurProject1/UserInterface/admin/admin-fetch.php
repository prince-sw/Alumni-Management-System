<?php
error_reporting(E_ERROR | E_PARSE);
$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath . "/Stdm/ourproject1/DBHandler/DBConnection.php";

$dbo = new DBConnect();
$output = "";
$row_id = 1;

$add_event_id = $_POST['add_event'];
$delete_event_id = $_POST['delete_event'];

if ($add_event_id >= 1) {
    $cmd = "UPDATE pending_events SET status = :status
    WHERE id = :id";
    $result = $dbo->conn->prepare($cmd);
    $result->execute([":status" => "passed", ":id" => $add_event_id]);
}
else if($delete_event_id >= 1){
    $cmd = "UPDATE pending_events SET status = :status
    WHERE id = :id";
    $result = $dbo->conn->prepare($cmd);
    $result->execute([":status" => "rejected", ":id" => $delete_event_id]);
}

else {
    $query = "SELECT * FROM pending_events WHERE status =:stat";
    $result = $dbo->conn->prepare($query);
    $result->execute([":stat" => "pending"]);
    if ($result->rowCount() > 0) {
        // $rtable = $result->fetchAll(PDO::FETCH_ASSOC);
        // $title = $rtable[0]['title'];
        $output .= '
    <div class="table-responsive">
    <div class = "not-found-msg" 
    style="color:white; margin-top: 1vh; letter-spacing: 0.2em;
    font-size: 28px; font-weight: 400;"
    >Pending Requests.</div> <br><br>

     <table class="table table bordered" style="color:white;
      font-size: 16px; font-weight: 600;">
      <tr>
       <th>REQ_ID</th>
       <th>TITLE</th>
       <th>DATE</th>
       <th>DESCRIPTION</th>
       <th>ACTION</th>

      </tr>
   ';
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $output .= '
      <tr id = ' . $row["id"] . '>
      <td id = "row-id">' . $row["id"] . '</td>
      <td id = "row-title">' . $row["title"] . '</td>
      <td id = "row-date">' . $row["date"] . '</td>
      <td id = "row-desc">' . $row["description"] . '</td>
      <td> 
        <div class = "row-btn" style = "display: flex;"><pre>     </pre>
           <button id = "accept-btn"> Accept </button><pre>   </pre>
           <button id = "reject-btn"> Reject </button> </td>
        </div>
     </tr>
    ';
        }
        echo $output;
    }
     else {
         $output .= '<div class = "not-found-msg" 
         style="color:white; margin-top: 10%; letter-spacing: 0.2em;
         font-size: 28px; font-weight: 400;"
         >No Pending Requests :)</div>';
        echo $output;
    }
}
