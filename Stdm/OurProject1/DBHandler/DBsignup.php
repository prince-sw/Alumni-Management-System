<?php
$rootpath=$_SERVER["DOCUMENT_ROOT"];
require $rootpath."/Stdm/ourproject1/DBHandler/DBConnection.php";


class doSignUp
{    
    public function getIdforsignup($roll,$password,$name,$phoneno)
    {
      // $username,$password,$name,$phoneno
       $id = 1;
       $db_obj = new DBConnect();
     //connect with the DB and return the id 
     //column from the student_details table where the username and password is a match
       $cmd="INSERT INTO student_details (roll, name, password, phoneno)
       VALUES (:rno, :un, :pwd, :pno)";
       $templet=$db_obj->conn->prepare($cmd);
       $templet->execute([":rno"=>$roll, ":pwd"=>$password, ":un"=>$name, "pno"=>$phoneno]);

      return $id;
    }
}

// id	name	phone	company	post	location	password
class signup_for_alm{

    public function getIdforalm($name, $phone, $company,
                    $location, $role, $pass){
    $id = 9;
    $db_obj = new DBConnect();
    $cmd="INSERT INTO alumni_details (name, phone, password, company, post, location)
        VALUES (:un, :pno, :pwd, :comp, :post, :loc)";
       $templet=$db_obj->conn->prepare($cmd);
       $templet->execute([":un"=>$name, ":pwd"=>$pass, ":loc"=>$location, ":comp"=>$company,
        ":post"=>$role, "pno"=>$phone]);
    return $id;
  }
}