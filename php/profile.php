<?php 
    $con = mysqli_connect('127.0.0.1:3306','root','','user') or die('Unable To connect');
    $result = mysqli_query($con,"SELECT * FROM user_details WHERE Username='" . $_COOKIE["u_name"] ."'");
    $row  = mysqli_fetch_array($result);
    $name = $row['Name'];
    $u_name = $row['Username'];
    $phn_no = $row['Phone_no'];
?>
<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" href="../css/bootstrap.css">
  <script src="../js/jQuery.js"></script>
  <script src="../js/bootstrap.js"></script>
  <script type="text/javascript" src="../js/main.js"></script>
  <title>Search Results</title>
  <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <style>
        td {
            color: white; 
            font-size: 30px;
        }
    </style>
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
        <center>
            <h1 style="color: white"><u>Details</u></h1>
            <table>
                <tr>
                    <td>Name: </td>
                    <td>&nbsp&nbsp<?php echo $name?></td>
                <tr>
                <tr>
                    <td>Username: </td>
                    <td>&nbsp&nbsp<?php echo $u_name ?></td>
                </tr>
                <tr>
                    <td>Phone number: </td>
                    <td>&nbsp&nbsp<?php echo $phn_no ?></td>
                </tr>
            </table>
            <br><br>
            <a href="../home.php"><button style="color: white; font-size: 30px; background-color: #e54040; border-radius: 7px">Home page</button></a>
        </center>
    </div><div id="bottom"></div><?php?>

<script type="text/javascript" src="../js/main.js"></script>
</body>
</html>
