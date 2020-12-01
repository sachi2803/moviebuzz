<!DOCTYPE html>
<html>
<head>

<!-- <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

  <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="../js/jQuery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <title>Trailers</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
  <script type="text/javascript" src="../js/main.js"></script>
</head>
<body>
	<div class="loader_1">
		<div class="loader">
			<span></span>
		</div>
	</div>

	<div id="outer">
		<center>
			<span style="color: #e54040; font-size: 80px;"> MovieBuff </span>
		</center>
		<hr>

		<div id="form">
			<form class="formwrap fw" id="main" action=./result.php method=POST>
				<input id="input" type="text" name='input' placeholder="Search Movies" required>
				<button id="button" type="submit">Search</button>
			</form>
		</div>

<?php
	$curl = curl_init();
	$w = $_GET['ide'];

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.themoviedb.org/3/movie/$w/videos?language=en-US&api_key=8448903d151180f7e5b479d58032281a",
		CURLOPT_RETURNTRANSFER => true,
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
		echo "CURL Error #:" . $err;
	} else {
		$dat = json_decode($response);
		?><div class="container">
		<div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="false">
		<ol class="carousel-indicators"><?php
		$j=0;
		foreach ($dat -> results as $i) {
			if($j==0){
				?><li data-target="#myCarousel" data-slide-to="<?php echo($j)?>" class="active"></li><?php
				$j++;
			}
			else{
				?><li data-target="#myCarousel" data-slide-to="<?php echo($j)?>" ></li><?php
				$j++;
			}
		}
    	?></ol>
    	<div class="carousel-inner"><?php
    	$j=0;
   		foreach ($dat -> results as $i ) {
    		$y=$i->key;
    		if($j==0){
      			?><div class="item active"><?php
    	  		echo("<iframe src='http://www.youtube.com/embed/$y' height='450' frameborder='0' allowfullscreen style='width:100%;'></iframe>")."\t";
	      		?></div><?php
    		}
    		else{
				?><div class="item"><?php
				echo("<iframe src='http://www.youtube.com/embed/$y' height='450' frameborder='0' allowfullscreen  style='width:100%;'></iframe>")."\t";
				?></div><?php
    		}
    		$j++;
     	}
     	?></div>
     	<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
    	</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
  		</div>
		</div><?php
	}
?>

<?php

	$curl = curl_init();
	$w = $_GET['ide'];

	curl_setopt_array($curl, array(
		CURLOPT_URL => "https://api.themoviedb.org/3/movie/$w?language=en-US&api_key=8448903d151180f7e5b479d58032281a",
		CURLOPT_RETURNTRANSFER => true,
	));

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	$dat = json_decode($response);
	if ($err) {
		header("Location: ./error.php");
	} else {
	    $i=$dat;
		$y=$i->title;
		$r=$i->id;

		?> <center><div class="details"> <?php
		?> <div class="titl"> <?php
		if($y!=NULL){
			echo $y;
			echo  nl2br ("\n");
		} ?><input type="button" id="button" style="background-color: #ffffff; color: #d83c3c;" onclick="myFunction('<?php echo $y; ?>')" value="Book Tickets!"/></div><?php
    	$y=$dat->genres;
		if($y!=NULL){
			echo("Genres: | ");
			foreach ($y as $key) {
				echo($key->name)." |\t";
			}
    		echo  nl2br ("\n");
  		}
  		$y = $dat->runtime;
  		if($y!=0 && $y!=NULL){
			echo "Runtime: ".$y." mins";
			echo  nl2br ("\n");
  		}
  		$y = $dat->release_date;
		if($y!=0 && $y!=NULL){
			echo "Release date: ".$y;
			echo  nl2br ("\n");
		}
		$y = $dat->overview;
		if($y!=NULL){
			echo "Overview: ".$y;
			echo  nl2br ("\n");
		}
    	?></div></center><br><?php
	}
?>

</div><div id="bottom"></div>
<script>
function myFunction(x)
{
    window.open("../Booking/php/timing.php","_self");
    window.localStorage.setItem("name", x);
}
</script>
<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
