<!DOCTYPE html>
<html>
<head>

    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <script src="../../js/jQuery.js"></script>
    <script src="../../js/bootstrap.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>
    <title>Availability</title>

</head>
<body>

	<div class="loader_1">
		<div class="loader">
			<span></span>
		</div>
	</div>

	<div id="outer">
    <div class="box" id="nav" style="height:100px;">
			<div align="right">
				<select>
					<option>Kurukshetra</option>
					<option>Delhi</option>
				</select>
			</div>

			<div align="left" style="margin-top: 5px; margin-left: 130px; color: #e54040; font-size: 40px;">MovieBuff</div>
			<div id="name">
				<a href="../../home.php"><img src="../images/logo_m.png" height="100px" width="100px"></a>
			</div>
		</div>

		<div class="box">
			<center>
				<h1 id="movname" style="color:white;"></h2>
				<h4 id="movtime" style="color:white;"></h4>
				<h4 id="movday" style="color:white;"></h4>
			</center>
		</div>

		<div class = "box">
			<div id="seats">
				<br>
				<center>
				<table cellspacing="5px">
					<tr><td class="space" colspan="29"><center><h3>&emsp;&emsp;Platinum(Rs. 400)</h3></center></td></tr>
					<tr class="400">
						<td colspan="2" class="space">A</td>
					<td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td> <td></td><td></td><td></td> <td></td>
					</tr>
				  	<tr class="400">
						<td colspan="2" class="space">B</td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td> <td></td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td><td></td> <td></td><td></td><td></td> <td></td>
				 	</tr>

				  <tr><td class="space" colspan="29"><center><h3>&emsp;&emsp;Gold(Rs. 250)</h3></center></td></tr>
				  <tr class="250">
				  	<td colspan="2" class="space">C</td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				    <td class="space" colspan="7"></td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				  </tr>
				  <tr class="250">
				  	<td colspan="2" class="space">D</td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				    <td class="space" colspan="7"></td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				  </tr>
				  <tr class="250">
				  	<td colspan="2" class="space">E</td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				    <td class="space" colspan="7"></td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				  </tr>
				  <tr class="250">
				  	<td colspan="2" class="space">F</td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				    <td class="space" colspan="7"></td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				  </tr>
				  <tr>
				  	<td class="space" colspan="29"><center><h3>&emsp;&emsp;Silver(Rs. 180)</h3></center></td>
				  </tr>
				  <tr class="180">
				  	<td colspan="2" class="space">G</td>
				  	<td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				    <td class="space" colspan="7"></td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				  </tr>
				  <tr class="180">
				  	<td colspan="2" class="space">H</td>
				  	<td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				    <td class="space" colspan="7"></td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				  </tr>
				  <tr class="180">
				  	<td colspan="2" class="space">I&emsp;&emsp;</td>
				  	<td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				    <td class="space" colspan="7"></td>
				    <td></td><td></td> <td></td><td></td><td></td> <td></td><td></td><td></td><td></td><td></td>
				  </tr>
				  <tr>
				  	<td class="space" colspan="29"><center>&emsp;</center></td>
				  </tr>
				  <tr>
				  	<td colspan="3" class="space"></td>
				  	<td class="space1" colspan="26"><center><h4>Screen this way</h4></center></td>

				  </tr>

				</table>
			</center>
			</div>
		</div>



		<div class="box" id="checkbox">
		<div id="total"> <h2 id="price" style="color:white;">Total: Rs. 0 </h2> </div>
			<button id="proceed">Proceed</button>
		</div>
		<div id="nav" class="nav2"></div>
    </div>
  <div id="bottom"></div><?php
?>

    <script type="text/javascript" src="../js/booking.js"></script>
    <script type="text/javascript" src="../../js/main.js"></script>
</body>
</html>
