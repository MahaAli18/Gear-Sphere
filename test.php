<?php
$countryVal = $_POST['Country'];
if(isset($_POST["register"]) && $countryVal == "Lahore")
//connection of site 1 mubashira
{
$servername1 = "172.20.10.3";
$username1 = "root";
$password1 = "pass";

$database = new mysqli($servername1, $username1, $password1, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$reg_query="INSERT INTO users (fullname, email, password_1, password_2, country)
  VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";

if ($database->query($reg_query) === TRUE) {
    echo "New record inserted successfully in site 1\n";

}
else {
    echo "Error: " . $reg_query. "<br>" . $database->error;
}
////second connection
//connection for head quarter	
$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$reg_query="INSERT INTO users (fullname, email, password_1, password_2, country)
  VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";

if ($conn2->query($reg_query) === TRUE) {
    echo "New record inserted successfully in site 1\n";
    header("location:home.html");

}
else {
    echo "Error: " . $reg_query. "<br>" . $conn2->error;
}
}

else if(isset($_POST["register"]) && $countryVal == "Islamabad")
//connection of site 2 ramlah
{
$servername1 = "172.20.10.12";
$username1 = "root";
$password1 = "pass";

$conn3 = new mysqli($servername1, $username1, $password1, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$reg_query="INSERT INTO users (fullname, email, password_1, password_2, country)
  VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";

if ($conn3->query($reg_query) === TRUE) {
    echo "New record inserted successfully in site 2\n";

}
else {
    echo "Error: " . $reg_query. "<br>" . $conn3->error;
}
////second connection
//connection for head quarter	
$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$reg_query="INSERT INTO users (fullname, email, password_1, password_2, country)
  VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";

if ($conn2->query($reg_query) === TRUE) {
    echo "New record inserted successfully in site 2\n";
    header("location:home.html");
}
else {
    echo "Error: " . $reg_query. "<br>" . $conn2->error;
}
}



else if(isset($_POST["register"]))
{
////second connection
//connection for head quarter	
$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$reg_query="INSERT INTO users (fullname, email, password_1, password_2, country)
  VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";

if ($conn2->query($reg_query) === TRUE) {
    echo "New record inserted successfully in headquarters\n";
    header("location:home.html");
}
else {
    echo "Error: " . $reg_query. "<br>" . $conn2->error;
}
}





// update


$countryVal = $_POST['Country'];
if(isset($_POST["update"]) && $countryVal == "Lahore")
//connection of site 1 mubashira
{
$servername1 = "172.20.10.3";
$username1 = "root";
$password1 = "pass";

$database = new mysqli($servername1, $username1, $password1, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$update_query="UPDATE users
SET fullname = '$fullname' ,email='$email', password_1 = '$password_1' , password_2 = '$password_2', country='$country'
WHERE email = '$email'";


if ($database->query($update_query) === TRUE) {
    echo "New record updated successfully in site 1\n";

}
else {
    echo "Error: " . $update_query. "<br>" . $database->error;
}
////second connection
//connection for head quarter	
$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$update_query="UPDATE users
SET fullname = '$fullname' ,email='$email', password_1 = '$password_1' , password_2 = '$password_2', country='$country'
WHERE email = '$email'";

if ($conn2->query($update_query) === TRUE) {
    echo "New record updated successfully in site 1\n";
    header("location:home.html");

}
else {
    echo "Error: " . $update_query. "<br>" . $conn2->error;
}
}

else if(isset($_POST["update"]) && $countryVal == "Islamabad")
//connection of site 2 ramlah
{
$servername1 = "172.20.10.12";
$username1 = "root";
$password1 = "pass";

$conn3 = new mysqli($servername1, $username1, $password1, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$update_query="UPDATE users
SET fullname = '$fullname' ,email='$email', password_1 = '$password_1' , password_2 = '$password_2', country='$country'
WHERE email = '$email'";

if ($conn3->query($update_query) === TRUE) {
    echo "New record updated successfully in site 2\n";

}
else {
    echo "Error: " . $update_query. "<br>" . $conn3->error;
}
////second connection
//connection for head quarter	
$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$update_query="UPDATE users
SET fullname = '$fullname' ,email='$email', password_1 = '$password_1' , password_2 = '$password_2', country='$country'
WHERE email = '$email'";

if ($conn2->query($update_query) === TRUE) {
    echo "New record updated successfully in site 2\n";
    header("location:home.html");
}
else {
    echo "Error: " . $update_query. "<br>" . $conn2->error;
}
}



else if(isset($_POST["update"]))
{
////second connection
//connection for head quarter	
$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$update_query="UPDATE users
SET fullname = '$fullname' ,email='$email', password_1 = '$password_1' , password_2 = '$password_2', country='$country'
WHERE email = '$email'";

if ($conn2->query($update_query) === TRUE) {
    echo "New record updated successfully in headquarters\n";
    header("location:home.html");
}
else {
    echo "Error: " . $update_query. "<br>" . $conn2->error;
}
}






// DELETE ////

$countryVal = $_POST['Country'];
if(isset($_POST["delete"]) && $countryVal == "Lahore")
//connection of site 1 mubashira
{
$servername1 = "172.20.10.3";
$username1 = "root";
$password1 = "pass";

$database = new mysqli($servername1, $username1, $password1, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$delete_query= "DELETE FROM users
WHERE  email = '$email'";


if ($database->query($delete_query) === TRUE) {
    echo "New record updated successfully in site 1\n";

}
else {
    echo "Error: " . $delete_query. "<br>" . $database->error;
}
////second connection
//connection for head quarter	
$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$delete_query= "DELETE FROM users
WHERE  email = '$email'";

if ($conn2->query($delete_query) === TRUE) {
    echo "New record updated successfully in site 1\n";
    header("location:home.html");

}
else {
    echo "Error: " . $delete_query. "<br>" . $conn2->error;
}
}

else if(isset($_POST["delete"]) && $countryVal == "Islamabad")
//connection of site 2 ramlah
{
$servername1 = "172.20.10.12";
$username1 = "root";
$password1 = "pass";

$conn3 = new mysqli($servername1, $username1, $password1, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$delete_query= "DELETE FROM users
WHERE  email = '$email'";

if ($conn3->query($delete_query) === TRUE) {
    echo "New record updated successfully in site 2\n";

}
else {
    echo "Error: " . $delete_query. "<br>" . $conn3->error;
}
////second connection
//connection for head quarter	
$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$delete_query= "DELETE FROM users
WHERE  email = '$email'";

if ($conn2->query($delete_query) === TRUE) {
    echo "New record updated successfully in site 2\n";
    header("location:home.html");
}
else {
    echo "Error: " . $delete_query. "<br>" . $conn2->error;
}
}



else if(isset($_POST["delete"]))
{
////second connection
//connection for head quarter	
$servername2 = "127.0.0.1";
$username2 = "root";
$password2 = "";

// Create connection
$conn2 = new mysqli($servername2, $username2, $password2, "store");

$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();//for storing all errors

$delete_query= "DELETE FROM users
WHERE  email = '$email'";

if ($conn2->query($delete_query) === TRUE) {
    echo "New record updated successfully in headquarters\n";
    header("location:home.html");
}
else {
    echo "Error: " . $delete_query. "<br>" . $conn2->error;
}
}




////async//




if(isset($_POST['insert']))
{
    //connection for site 1	
    $servername1 = "172.20.10.12";
    $username1 = "root";
    $password1 = "pass";

    $conn1 = new mysqli($servername1, $username1, $password1, "store");


   
$fullname=$_POST['fullname'];
$email=$_POST['email'];
$password_1=$_POST['password_1'];
$password_2=$_POST['password_2'];
$country=$_POST['Country'];
$errors= array();

$insert_query="INSERT INTO users (fullname, email, password_1, password_2, country)
VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";

    if ($conn1->query($insert_query) === TRUE) 
    {
        echo "inserted";
    }
    else 
    {
        echo "Error: " . $insert_query . "<br>" . $conn1->error;
    }

    $inserttemp_query="INSERT INTO temp (fullname, email, password_1, password_2, country)
VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";

    if ($conn1->query($inserttemp_query) === TRUE)
    {
        header("location:register.php");
    }
    else 
    {
        echo "Error: " .$inserttemp_query . "<br>" . $conn1->error;
    }
}
if(isset($_POST['async']))
{
    $servername1 = "172.20.10.12";
    $username1 = "root";
    $password1 = "pass";

    $conn1 = new mysqli($servername1, $username1, $password1, "store");
    ////second connection
    //connection for head quarter	
    $servername2 = "127.0.0.1";
    $username2 = "root";
    $password2 = "";
    

$conn2 = new mysqli($servername2, $username2, $password2, "store");

$sql = mysqli_query($conn1,"SELECT * FROM temp");

            while($row = mysqli_fetch_array($sql))
            {
                {
                    
                    $fullname=$row['fullname'];
                    $email=$row['email'];
                    $password_1=$row['password_1'];
                    $password_2=$row['password_2'];
                    $country=$row['country'];
                }

                $sq="INSERT INTO users (fullname, email, password_1, password_2, country)
                VALUES('".$fullname."','".$email."','".$password_1."','".$password_2."','".$country."')";

                if ($conn2->query($sq) === true)
                   
                {
                    $sq="DELETE FROM temp WHERE email='$email'";
                    if ($conn1->query($sq) === FALSE)
                            die('Could not clear data: ' . mysqli_error($conn1));
                    else
                            $result=$conn1->query($sq);
                           }

                    else{
                            die('Could not update data: ' . mysqli_error($conn1));
                           }
            }
            $s="ALTER TABLE temp AUTO_INCREMENT = 1;";
                if ($conn1->query($s) === FALSE)
                    die('Error Resseting the counter ' . mysqli_error($conn1));
                    echo"SYNCED";
        }

?>