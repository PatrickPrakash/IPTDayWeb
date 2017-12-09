<?php
$password='2w0rBN-}MR$b';
$servername="localhost";
$username="udigiupdater";
$dbname="DIGI_BOARD_DB";
mysql_connect("localhost","udigiupdater","$password") or die (mysql_error());
mysql_select_db("DIGI_BOARD_DB")or die(mysql_error());
$conn= new mysqli($servername, $username, $password, $dbname);
?>