
<?php
$rootpath = $_SERVER["DOCUMENT_ROOT"];
require $rootpath . "/Stdm/ourproject1/DBHandler/DBConnection.php";

class DBStudentDetails
{
  public function getId($username, $password)
  {
    $roll_regex = "/^[A-Za-z]{3}[0-9]{5}$/";
    $id = "-1";
    $table_id = "-1";
    $dbo = new DBConnect();
    //connect with the DB and return the id 
    //column from the student_details table where the username and password is a match
    if (preg_match($roll_regex, $username)) {
      $cmd_rn = "select * from student_details where roll=:username and password=:pwd";
      $templet = $dbo->conn->prepare($cmd_rn);
      $templet->execute([":username" => $username, ":pwd" => $password]);

      if ($templet->rowCount() > 0) {
        $rtable = $templet->fetchAll(PDO::FETCH_ASSOC);
        $id = $rtable[0]['id'];
        $table_id = 1;
        session_start();
        $_SESSION['stdname-login'] = $rtable[0]['name'];
        $_SESSION['user-id'] = $rtable[0]['id'];
        $_SESSION['table-id'] = 1;
      }
    }
    
    else {
      $cmd_rn = "select * from alumni_details where phone=:pno and password=:pwd";
      $templet = $dbo->conn->prepare($cmd_rn);
      $templet->execute([":pno" => $username, ":pwd" => $password]);

      if ($templet->rowCount() > 0) {
        $rtable = $templet->fetchAll(PDO::FETCH_ASSOC);
        $id = $rtable[0]['id'];
    
        session_start();
        $table_id = 2;
        $_SESSION['table-id'] = 2;
        $_SESSION['alm-id'] = $rtable[0]['id'];;
        $_SESSION['almname-login'] = $rtable[0]['name'];
        // $id = 8;
      }
    }

    $rv = array("userid" => $id, "tableid" => $table_id);
    return $rv;
  }
}

class DBsearchforUser
{
  public function searchUser($username)
  {
    $dbo = new DBConnect();
    $cmd = "SELECT * FROM alumni_details where name = :un";
    $templet = $dbo->conn->prepare($cmd);
    $templet->execute([":un" => $username]);

    if ($templet->rowCount() > 0) {
      $rtable = $templet->fetchAll(PDO::FETCH_ASSOC);
      // $res = $rtable[0]['name'];
      $res = array("name"=>$rtable[0]['name'], "loc" => $rtable[0]["location"],
                    "company"=>$rtable[0]['company'], "role"=>$rtable[0]["post"]);
      return $res;
    }
    else{
      return "Alumni Not Found.";
    }
  }
}

class updateStdInfo{
  public function updateStd($un, $roll, $ph){
    session_start();
    $id = $_SESSION['user-id'];
    $dbo = new DBConnect();
    $cmd = "UPDATE student_details SET name = :un, roll = :roll
            , phoneno = :pno WHERE id = :id";
    $res = $dbo->conn->prepare($cmd);
    $success = $res->execute([":un" => $un, ":roll" =>$roll, ":pno"=>$ph, ":id"=>$id]);
    if ($success){
      $cmd = "SELECT name FROM student_details WHERE id=$id";
      $templet = $dbo->conn->prepare($cmd);
      $templet->execute();
      $rtable = $templet->fetchAll(PDO::FETCH_ASSOC);
      $_SESSION['username-login'] = $rtable[0]['name'];
    }
    return $success;
  }
}

class updateAlmInfo{
  public function updateAlm($company, $role, $ph, $loc){
    session_start();
    $id = $_SESSION['alm-id'];
    $dbo = new DBConnect();
    $cmd = "UPDATE alumni_details SET company = :comp, post = :role
            , phone = :pno, location = :loc WHERE id = :id";
    $res = $dbo->conn->prepare($cmd);
    $success = $res->execute([":comp" => $company, ":role" =>$role, ":pno"=>$ph,
                              ":loc" => $loc, ":id"=>$id]);
    if ($success){
      $cmd = "SELECT name FROM alumni_details WHERE id=$id";
      $templet = $dbo->conn->prepare($cmd);
      $templet->execute();
      $rtable = $templet->fetchAll(PDO::FETCH_ASSOC);
      $_SESSION['almname-login'] = $rtable[0]['name'];
    }
    return "hi";
  }
}

class pendingPost{
  public function addPendingPost($title, $date, $desc){
  // $id = 9;
  $obj = new DBConnect();
  // $cmd="INSERT INTO alumni_details (name, phone, password, company, post, location)
  //     VALUES (:un, :pno, :pwd, :comp, :post, :loc)";
  //    $templet=$db_obj->conn->prepare($cmd);
  //    $templet->execute([":un"=>$name, ":pwd"=>$pass, ":loc"=>$location, ":comp"=>$company,
  //     ":post"=>$role, "pno"=>$phone]);
  return 6;
}
}