<!DOCTYPE html>
<html>
<head>
<title>Day</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8">
<link rel="stylesheet" href="css/main.css">
<script src="js/day.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
</head>
<body>
<? include("connection.php");
?>
<?php
$today=date('Y-m-d');
$day_n = date("l"); 
$next_date =date('Y-m-d', strtotime($today .' +1 day'));
$next_date1 =date('Y-m-d', strtotime($today .' +2 day'));
$sql = "SELECT DAY FROM DAY_STATUS_TBL WHERE DATEE = '$today'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
 $day = $row["DAY"] ;
  }
} else {
    echo "0 results";
}
$sql = "SELECT DAY FROM DAY_STATUS_TBL WHERE DATEE = '$next_date'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
     if($row["DAY"]=="8" || $row["DAY"]=="6" || $row["DAY"]=="7" )
     {
         $next_day = "-";
     }
     else
     {
          $next_day = $row["DAY"] ;
     }
  }
} else {
    echo "0 results";
}
$sql = "SELECT DAY FROM DAY_STATUS_TBL WHERE DATEE = '$next_date1'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
 while($row = $result->fetch_assoc()) {
     if($row["DAY"]=="8" || $row["DAY"]=="6" || $row["DAY"]=="7" )
     {
         $next_day1 = "-";
     }
     else
     {
         $next_day1 = $row["DAY"] ;
     }
                                       }
} else {
    echo "0 results";
}
$sql="SELECT max(SEM_STARTDATE) as startwday from SEMESTER_DURATION";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
        while($row = $result->fetch_assoc()){
        $startworkingday=$row ['startwday'];
        }
    }
$sql="SELECT max(SEM_ENDDATE) as lastwday from SEMESTER_DURATION";
	$result = $conn->query($sql);
	if ($result->num_rows > 0)
	{
	$row = $result->fetch_assoc();
	$lastworkingday=$row ['lastwday'];
	}
$sql="SELECT count(*) as strike from DAY_STATUS_TBL where datee <= '$startworkingday' and datee >='$lastworkingday' and day =7 ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
    	$row = $result->fetch_assoc();
    	$strikedays=$row ['strike'];
    }
    else
    {
    	$strikedays=0;
    }
$sql="SELECT count(*) as total from DAY_STATUS_TBL where datee <= '$today' and datee >='$startworkingday' and day between 0 and 6 ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0)
    {
    	$row = $result->fetch_assoc();
    	$totaltilltoday=$row ['total'];
    }
    else
    {
    	$totaltilltoday=0;
    }
$sql="SELECT count(*) as total from DAY_STATUS_TBL  where datee >'$today' and datee <= '$lastworkingday' and day between 1 and 5 ";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $totalexpected=$row ['total'];
$grosstotal=$totaltilltoday+$totalexpected;
$today= DateTime::createFromFormat('Y-m-d', $today);
$today= $today->format('d-m-Y');
$next_date= DateTime::createFromFormat('Y-m-d', $next_date);
$next_date= $next_date->format('d-m-Y');
$next_date1= DateTime::createFromFormat('Y-m-d', $next_date1);
$next_date1= $next_date1->format('d-m-Y');
$lastworkingday =DateTime::createFromFormat('Y-m-d', $lastworkingday );
$lastworkingday = $lastworkingday ->format('d-m-Y');
$conn->close();
?>
	<div class="main">
		<div class="events-info  col-md-3 col-centered col-lg-3 col-xs-3  container">
			<div class="events-main">
				<div class="slide-text">
				<h4><?php echo "$day_n"; ?></h4>
				<h2><?php echo "$day"; ?></h2>
                
                    <ul class="list">
<<<<<<< HEAD
                            <li style="float: right;font-family:Gotham Rounded;"><?php echo "$today"; ?></li>
=======
                            <li style="float: right">Date : <?php echo "$today"; ?></li>
>>>>>>> add0f129cc57e57cecc1b41934c8dd90b59c602c
                        </ul>
			</div>
<div class="events-text1"><ul>
                            <li style="float: left;font-family:Gotham Rounded;"><?php echo"$next_date";?></li>
                    
                            <li style="float: right;font-family:Gotham Rounded;">Day: <?php echo"$next_day"; ?></li><br/>
<p><li style="float: left;font-family:Gotham Rounded;"><?php echo"$next_date1";?></li>
                            <li style="float: right;font-family:Gotham Rounded;">Day: <?php echo"$next_day1"; ?></li><br/></p>
                        </ul></div>
			<div class="events-text">
			<span class="point"></span> Working days till today(<?php echo "$today"; ?>) : <?php echo"$totaltilltoday"; ?> <br><br>
				<div class="more" id="events">
					<span class="point"></span> Remaining working days till <?php echo"$lastworkingday"; ?> : <?php echo "$totalexpected"; ?><br><br>
					<span class="point"></span> Total working days till <?php echo"$lastworkingday"; ?> : <?php echo"$grosstotal"; ?> <br><br>
					<span class="point"></span> Strikes : <?php echo"$strikedays"; ?> <br>
						<button type="button" id="events-hide" class="showLink btn btn1" onclick="showHide('events');return false;"> Less </button>
				</div>
			</div>
<div class="events-bottom">
	<button type="button" id="events-show" class="showLink btn" onclick="showHide('events');return false;"> More </button>
</div>
			</div>
			
		</div>
		<div class="centerb">
		    <input type="button" class="viewcal"  onclick="location.href='calendar/index.php';" value="Show Calendar" />
		</div>
<div class="copyright">
<p> © 2017 Day System . All rights reserved  </p>
</div>
</div>
</body>
</html>
