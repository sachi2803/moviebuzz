<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="./css/bootstrap.css">
  <script src="./js/jQuery.js"></script>
  <script src="./js/bootstrap.js"></script>
    <title>Movie Trailers | Home</title>
    <title></title>
  <link rel="stylesheet" type="text/css" href="./css/styles.css">
  <script type="text/javascript" src="./js/main.js"></script>
</head>
<body>
	<div class="loader_1">
		<div class="loader">
			<span></span>
		</div>
	</div>

	<div id="outer">
		<div align="right">
			<a href="./php/profile.php"><button style="background-color: #e54040; color: white; font-size: 20px; border-radius: 5px">My Profile</button></a>
		</div>
		<center>
			<span style="color: #e54040; font-size: 80px;"> MovieBuff </span>
		</center>
		<hr>
		</nav>
		<div class = header>
			<nav>
				<ul>	
					<li><button class="genre" id="28" name="ACTION">Action</button></li>
					<li><button class="genre" id="12" name="ADVENTURE">Adventure</button></li>
					<li><button class="genre" id="35" name="COMEDY">Comedy</button></li>
					<li><button class="genre" id="27" name="HORROR">Horror</button></li>
					<li><button class="genre" id="80" name="CRIME">Crime</button></li>
				</ul>
			</nav>
		</div>
		
		<div id="form">
			<form class="formwrap fw" id="main" action=./php/result.php method=POST>
				<input id="input" type="text" name='input' placeholder="Search Movies" required>
				<button id="button" type="submit">Search</button>
			</form>
		</div>
		
		

	<?php
		function query($url)
		{
			$curl = curl_init();
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
			$response = curl_exec($curl);
			$err = curl_error($curl);
			curl_close($curl);
			$dat = json_decode($response);

			if ($err) {
				header("Location: ./error.php");

			} else {
				?>
				<div class="scroll" style = "background-color: rgb(0, 0, 0); border-radius: 10px">
					<div class="wrap" id="slide">
						<?php
							foreach ($dat -> results as $i) {
								$y=$i->poster_path;
								$r=$i->id;
								$t=$i->title;
								if($y!=NULL){
						?>
									<div class="poster spa" id= <?php echo($r) ?>>
										<?php
											echo("<img class = 'image'  height='300px' src= 'http://image.tmdb.org/t/p/w185/$y'>");
											echo("\t"."\t"."<br>"."<center><p  class='image ima' > <br>$t </p></center>");
										?>
									</div><?php
								}
							}
						?>
					</div>
				</div>
	<?php
			}
		}
	?>
		<?php?>
		<div class="heading"> 
			<center>
				<?php
					echo "TRENDING";
				?>
			</center>
		</div>
		<?php
			query("https://api.themoviedb.org/3/movie/popular?api_key=8448903d151180f7e5b479d58032281a&language=en-US&page=1");
		?> 
		<div class="heading"> 
			<center>
				<?php
					echo "LATEST";
				?>
			</center>
		</div>
		<?php
			query("https://api.themoviedb.org/3/movie/now_playing?page=1&language=en-US&api_key=8448903d151180f7e5b479d58032281a");
		?> 
		
	</div>
	<div id="bottom"></div>
  	<script type="text/javascript" src="./js/main.js"></script>
</body>
</html>
