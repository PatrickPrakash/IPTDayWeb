<?php
mysqli_connect("localhost", "root", "","day") or die (mysql_error());
$conn= new mysqli("localhost","root","","day");
if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
$today=date('Y-m-d');
//echo "$today <br>";
$sql="select * from day where date= '$today'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$day=intval($row['day']);
?>
