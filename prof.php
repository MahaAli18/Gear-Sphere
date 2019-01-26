<?php

session_start();
?>

<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>website</title>
    <link rel="stylesheet" href="Aboutus-sty.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="homesty.css"/>
    <link rel="stylesheet" type="text/css" media="screen" href="prof.sty.css"/>
    <script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ"
        crossorigin="anonymous">
     
</head>

<body>
    <!--Starting of navbar 1-->
    <nav class="navbar navbar-toggleable-sm navbar-inverse nav1">
        <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <a href="home.html" class="navbar-brand">Gear Sphere</a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logout.php" class="nav-link" style="font-size:18px; color: rgb(231, 228, 224);">Logout</a>
                </li>
                <li class="nav-item ">
                        <a href="./shopping cart/Cart.php" class="nav-link nav-log" style="font-size:18px";>My cart</a>
                    </li>
            </ul>
           
        </div>
    </nav>
    <!--Ending of navbar 1-->


    <!--Starting of navbar 2 -->
    <nav class="navbar navbar-toggleable-md nav2">
            <div class="container" style="margin-right:4em;">
                <ul class="main-menu">
                    <li> <a href="#">Shop</a>
    
                        <div class="menu-sub">
                            <div class="menu-col-1">
    
                                <h5 class="menu-category">Tops</h5>
                                <ul>   <li><a href="">Link 01</a></li>
                                        <li><a href="">Link 01</a></li>
                                        <li><a href="">Link 01</a></li>
                                </ul>
    
                                <h5 class="menu-category">Bottoms</h5>
                                <ul>
                                        <li><a href="">Link 01</a></li>
                                        <li><a href="">Link 01</a></li>
                                        <li><a href="">Link 01</a></li>
                                </ul>
    
                            </div>
                            <div class="menu-col-2">
    
                                    <h5 class="menu-category">Accessories</h5>
                                    <ul>   <li><a href="">Link 01</a></li>
                                            <li><a href="">Link 01</a></li>
                                            <li><a href="">Link 01</a></li>
                                    </ul>
        
                                    <h5 class="menu-category">Shoes</h5>
                                    <ul>
                                            <li><a href="">Link 01</a></li>
                                            <li><a href="">Link 01</a></li>
                                            <li><a href="">Link 01</a></li>
                                    </ul>
        
                                </div>
    
                        </div>
                    </li>
    
                    <li>
                        <a href="home.html">Home</a>
                    </li>
                    <li>
                        <a href="Aboutus.html">About Us</a>
                    </li>
                    <li>
                        <a href="#">Contact</a>
                    </li>
    
    
    
                </ul>
            </div>
        </nav>
        
    
        <div class="container2">
        <h3 class="welcome">Welcome to Gear Sphere </h3> 
        </div>


<?php

$servername = "localhost";
$usernamedb = "root";
$dbpassword = "";
$dbname="store";


$con=new mysqli($servername,$usernamedb,$dbpassword,$dbname);
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM users where country='Lahore'");

echo "<table border='4'>
<tr>
<th>ID</th>
<th>FULL_NAME</th>
<th>EMAIL</th>
<th>PASSWORD_1</th>
<th>PASSWORD_2</th>
<th>COUNTRY</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fullname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['password_1'] . "</td>";
echo "<td>" . $row['password_2'] . "</td>";
echo "<td>" . $row['country'] . "</td>";

echo "</tr>";
}
echo "</table>";
echo"<br><br>";

$result = mysqli_query($con,"SELECT * FROM users where country='Karachi'");

echo "<table border='4'>
<tr>
<th>ID</th>
<th>FULL_NAME</th>
<th>EMAIL</th>
<th>PASSWORD_1</th>
<th>PASSWORD_2</th>
<th>COUNTRY</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fullname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['password_1'] . "</td>";
echo "<td>" . $row['password_2'] . "</td>";
echo "<td>" . $row['country'] . "</td>";

echo "</tr>";
}
echo "</table>";
echo"<br><br>";

$result = mysqli_query($con,"SELECT * FROM users where country='Islamabad'");

echo "<table border='4'>
<tr>
<th>ID</th>
<th>FULL_NAME</th>
<th>EMAIL</th>
<th>PASSWORD_1</th>
<th>PASSWORD_2</th>
<th>COUNTRY</th>

</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['id'] . "</td>";
echo "<td>" . $row['fullname'] . "</td>";
echo "<td>" . $row['email'] . "</td>";
echo "<td>" . $row['password_1'] . "</td>";
echo "<td>" . $row['password_2'] . "</td>";
echo "<td>" . $row['country'] . "</td>";

echo "</tr>";
}
echo "</table>";

echo"<br><br>";
mysqli_close($con);
?>
            
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn"
        crossorigin="anonymous"></script>
</body>

</html>
