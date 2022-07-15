<?php

$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath . "/Stdm/ourproject1/DBHandler/DBConnection.php";

$dbo = new DBConnect();
$output = "";
$action = $_POST["action"];

if ($action == "post_public_events") {
    $title = $_POST["title"];
    $date = $_POST["date"];
    $description = $_POST["desc"];
    // $res = array("title" => $title, "date" => $date, "desc" => $description);
    $cmd = "INSERT INTO  public_events (title, date, description)
    VALUES (:title, :date, :desc)";
    $templet = $dbo->conn->prepare($cmd);
    $templet->execute([
        ":title" => $title, ":date" => $date, ":desc" => $description
    ]);
    echo json_encode("Public Post Succesful");
} 

    else if ($action == "load_public_events") {
    $query = "SELECT * FROM public_events";
    $result = $dbo->conn->prepare($query);
    $result->execute();
    if ($result->rowCount() > 0) {
        // $row = $result->fetchAll(PDO::FETCH_ASSOC);
        // $id = $row[0]['description'];
        $output .= '
    <div class="table-responsive">
     <table class="table table bordered" style="color:white;
      font-size: 16px; font-weight: 600; text-align: center">
      <h1 style = "color: white; text-align: center;">Available Events<h1><br>
      <tr>
       <th>Title</th>
       <th>Date</th>
       <th>Description</th>
      </tr>
   ';
        while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
            $output .= '
     <tr>
      <td>' . $row["title"] . '</td>
      <td>' . $row["date"] . '</td>
      <td>' . $row["description"] . '</td>
     </tr>
    ';
        }
        echo json_encode($output);
    } else {
        echo 'Data Not Found';
    }
}
