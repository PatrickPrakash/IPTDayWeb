<?php
$servername = "iptgptc.ac.in";
$username = "udigiupdater";
$password = '2w0rBN-}MR$b';
$database = "DIGI_BOARD_DB";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT REASON from DAY_STATUS_TBL";
$result = mysqli_query($conn, $sql);
$array = array();
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $array[] = $row;
        $reason = $row['REASON'];
        //echo $row['REASON'];
       // echo "<br>";
    }
} else {
    echo "0 results";
}
//echo $array[0]['REASON'];
//echo $array[0]['DATEE'];
mysqli_close($conn);
?>
