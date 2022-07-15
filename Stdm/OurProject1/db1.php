<?php
$servername = "localhost";
$username = "csb53";
$password = "1234";
$databaseName = "ourdb";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$databaseName", $username, $password);
  //conn is now an object of PDO. Data members of PDO can be accessed by conn -> data member.
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

//---------INSERT----------

// try{
// $cmd = "INSERT INTO student_details (roll, name, password) VALUES ('csb1905', 'druv', 'helo')";
// $conn -> exec($cmd);
// }
// catch(PDOException $ee){
//   echo "  Already Added! " . $ee->getMessage();
// }

// try{
//   $cmd = "INSERT INTO student_details (roll, name, password) VALUES(:roll, :un, :pw)";
//   $template = $conn->prepare($cmd); //template is an object of PDO statement.
  //Creates a "prepeared statement" to execute similar statements efficiently.

  //Method 1 (To build a template).
  // $template->bindValue(":roll", "CSB1904");
  // $template->bindValue(":un", "Vik");
  // $template->bindValue(":pw", "1234");

  //Method 2.
  // $un = "Sherlock";
  // $r_no = "csb192";
  // $pw = "1234";
  // $template->bindParam("roll", $r_no);
  // $template->bindParam("un", $un);
  // $template->bindParam("pw", $pw);

  //Method 3.
//   $template -> execute(array(":roll"=>"csb19011", ":un"=>"Joseph", ":pw" => "pwpwpw"));

// }
// catch(PDOException $e){
//   echo $e->getMessage();
// }

//--------SELECT---------

// try{
//   $cmd = "SELECT * from student_details";
//   $template = $conn->prepare($cmd);

//   $template->execute();

//   echo("<br".$template->rowCount()); //returns no. of rows.

//   $rv = $template->fetchAll(PDO::FETCH_ASSOC); //returns 2d array.
//   print_r($rv);
// }
// catch(PDOException $e){
//   echo $e->getMessage();
// }

// try{
//   $cmd = "SELECT * from student_details WHERE name LIKE 'dr%'"; //returns values where name starts with dr.
//   $template = $conn->prepare($cmd);
//   $template->execute();

//   echo("<br>".$template->rowCount()); //returns no. of rows.

//   $rv = $template->fetchAll(PDO::FETCH_ASSOC); //returns 2d array.
//   print_r($rv);
// }
// catch(PDOException $e){
//   echo $e->getMessage();
// }

try{
  $cmd = "SELECT name from student_details WHERE name like :ph"; //returns values where name starts with dr.
  $template = $conn->prepare($cmd);
  $template->execute([":ph" => "______ %"]); //returns names starting with 6chars followed by space and then any characters.

  echo("<br".$template->rowCount()); //returns no. of rows.

  $rv = $template->fetchAll(PDO::FETCH_ASSOC); //returns 2d array.
  print_r($rv);
}
catch(PDOException $e){
  echo $e->getMessage();
}
?>