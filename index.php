<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
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
<h1 class="hh">Today's Day</h1>
	<div class="main">
		<div class="events-info  col-md-3 col-centered col-lg-3 col-xs-3  container">
			<div class="events-main">
				<div class="slide-text">
				<h2>2</h2>
                    <ul class="list">
                            <li style="float: left">Week No : 4</li>
                            <li style="float: right">Date: 2017-12-06</li>
                        </ul>
			</div>
			<div class="events-text">
			<span class="point"></span> Working days till today : 2 <br><br>
				<div class="more" id="events">
					<span class="point"></span> Remaining working days : 2<br><br>
					<span class="point"></span> Total working days : 2 <br><br>
					<span class="point"></span> Strikes : 2 <br>
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
