<?php
session_start();

$servername1 = "192.168.10.11";
$username1 = "root";
$password1 = "pass";

// Create connection
$database = new mysqli($servername1, $username1, $password1, "store"); //My database name was calm

$servername3 = "192.168.10.10";
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

if(isset($_POST["register"])){
  $fullname=$_POST['fullname'];
  $email=$_POST['email'];
  $password_1=$_POST['password_1'];
  $password_2=$_POST['password_2'];
  $country=$_POST['Country'];
  $errors= array();//for storing all errors
  $_SESSION['msg1']="";
  $_SESSION['msg2']="";
  
}

//database connection
//$database= new mysqli("localhost", "root" ,'', "store");

if($database->connect_error===TRUE){
  die("connection failed!");
}
if($conn2->connect_error===TRUE){
  die("connection failed!");
}
if($con3->connect_error===TRUE){
  die("connection failed!");
}
//check for email ids that alredy exists

$check_query="SELECT * FROM users where email='$email'";
$result=mysqli_query($database,$check_query);


$users=mysqli_fetch_assoc($result);


if($users){
  if($users['email']===$email)
  array_push($errors,"email alredy exists");
}

///check that both passwords are same
  if($password_1!=$password_2){
  array_push($errors,"the  two password doesnt match");
}



//insertion of form into data base

if(count($errors)==0  && $country=="Lahore"){
  $reg_query="INSERT INTO users (fullname, email, password_1, password_2, country)
  VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";
  if($database->query($reg_query) && $conn2->query($reg_query)){
    echo "You are Successfully registered";
    $_SESSION['fullname']=$fullname;
    $_SESSION['email']=$email;
    $_SESSION['password_1']=$password_1;
    $_SESSION['Country']=$country;
    

    header("location:prof.php");
  }
  else{
    echo "EROR WHILE REGISTERING:" .$database->error;
  }


}

else{
  print_r($errors);
}


if($users){
  if($users['email']===$email)
  array_push($errors,"email alredy exists");
}

///check that both passwords are same
  if($password_1!=$password_2){
  array_push($errors,"the  two password doesnt match");
}

 //print_r($errors) print errors if any


//insertion of farm into data base

if(count($errors)==0 && $country=="Karachi"){
  $reg_query="INSERT INTO users (fullname, email, password_1, password_2, country)
  VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";
  if($conn2->query($reg_query)){
    echo "You are Successfully registered";
    $_SESSION['fullname']=$fullname;
    $_SESSION['email']=$email;
    $_SESSION['password_1']=$password_1;
    $_SESSION['Country']=$country;
    

    header("location:prof.php");
  }
  else{
    echo "EROR WHILE REGISTERING:" .$conn2->error;
  }


}

else{
  print_r($errors);
}

if($users){
  if($users['email']===$email)
  array_push($errors,"email alredy exists");
}

///check that both passwords are same
  if($password_1!=$password_2){
  array_push($errors,"the  two password doesnt match");
}

 //print_r($errors) print errors if any


//insertion of farm into data base

if(count($errors)==0 && $country=="Islamabad"){
  $reg_query="INSERT INTO users (fullname, email, password_1, password_2, country)
  VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";
  if($con3->query($reg_query) && $conn2->query($reg_query)){
    echo "You are Successfully registered";
    $_SESSION['fullname']=$fullname;
    $_SESSION['email']=$email;
    $_SESSION['password_1']=$password_1;
    $_SESSION['Country']=$country;
    

    header("location:prof.php");
  }
  else{
    echo "EROR WHILE REGISTERING:" .$con3->error;
  }


}

else{
  print_r($errors);
}

?>