<?php
$password='2w0rBN-}MR$b';
$servername="iptgptc.ac.in";
$username="udigiupdater";
$dbname="DIGI_BOARD_DB";
$conn = new mysqli($servername, $username, $password,$dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
