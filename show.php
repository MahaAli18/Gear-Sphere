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