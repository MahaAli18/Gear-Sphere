<?php

session_start();

$servername1 = "192.168.0.178";
$username1 = "root";
$password1 = "pass";

// Create connection
$database = new mysqli($servername1, $username1, $password1, "store"); //My database name was calm

$servername3 = "192.168.0.165";
$username3 = "root";
$password3 = "pass";

// Create connection
$con3 = new mysqli($servername3, $username3, $password3, "store"); //My database name was calm

$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");


// Check connection
if ($database->connect_error) {
    die("Connection failed: " . $database->connect_error);
} 
echo "Connected to".$servername1." successfully <br/>";

if ($conn2->connect_error) {
  die("Connection failed: " . $conn2->connect_error);
} 
echo "Connected to".$servername2." successfully <br/>";

if ($con3->connect_error) {
  die("Connection failed: " . $con3>connect_error);
} 
echo "Connected to".$servername3." successfully <br/>";

if (isset($_POST['login'])) {
  $fullname = $_POST['fullname'];
  $password_1 = $_POST['password_1'];
  $errors= array();
  $_SESSION['password_1']="$password_1";
 
  
//   $_SESSION['e']="incorrect ID or Password";
}

 //database connection
//$database= new mysqli("localhost", "root" ,'', "store");

if($database->connect_error===TRUE){
  die("connection failed!");
}

  if (count($errors) == 0) {
  	$query = "SELECT * FROM users WHERE fullname='$fullname' AND password_1='$password_1'";
  	$results = mysqli_query($database, $query);
  	if (mysqli_num_rows($results) == 1) {
        $_SESSION['fullname']=$fullname;
        $_SESSION['password_1']=$password_1;

  	  header('location: prof.php');
      }
      else {
          array_push($errors, "Wrong username/password combination");
          $_SESSION['e']="Wrong username/password combination";
          header('location: loginsign.php');
  	}
  }

  if($conn2->connect_error===TRUE){
    die("connection failed!");
  }
  
    if (count($errors) == 0) {
      $query = "SELECT * FROM users WHERE fullname='$fullname' AND password_1='$password_1'";
      $results = mysqli_query($conn2, $query);
      if (mysqli_num_rows($results) == 1) {
          $_SESSION['fullname']=$fullname;
          $_SESSION['password_1']=$password_1;
  
        header('location: prof.php');
        }
        else {
            array_push($errors, "Wrong username/password combination");
            $_SESSION['e']="Wrong username/password combination";
            header('location: loginsign.php');
      }
    }
    if($con3->connect_error===TRUE){
      die("connection failed!");
    }
    
      if (count($errors) == 0) {
        $query = "SELECT * FROM users WHERE fullname='$fullname' AND password_1='$password_1'";
        $results = mysqli_query($con3, $query);
        if (mysqli_num_rows($results) == 1) {
            $_SESSION['fullname']=$fullname;
            $_SESSION['password_1']=$password_1;
    
          header('location: prof.php');
          }
          else {
              array_push($errors, "Wrong username/password combination");
              $_SESSION['e']="Wrong username/password combination";
              header('location: loginsign.php');
        }
      }
?>