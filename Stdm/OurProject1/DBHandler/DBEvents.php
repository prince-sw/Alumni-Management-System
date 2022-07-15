<?php
$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath . "/Stdm/ourproject1/DBHandler/DBConnection.php";

class pendingPost
{

    public function addPendingPost($title, $date, $desc)
    {   
        // $id = 9;
        session_start();
        $alm_id = $_SESSION['alm-id'];
        $obj = new DBConnect();
        $cmd = "INSERT INTO pending_events (title, date, description, status, posted_by)
        VALUES (:title, :date, :desc, :status, :alm_id)";
        $templet = $obj->conn->prepare($cmd);
        $templet->execute([
            ":title" => $title, ":date" => $date, ":desc" => $desc,
            ":status" => "pending", ":alm_id" => $alm_id
        ]);
        return $alm_id;
    }
}

