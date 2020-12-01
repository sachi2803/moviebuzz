<?php
    $message = "";
    if(count($_POST) > 0) {
        $con = mysqli_connect('127.0.0.1:3306','root','','user') or die('Unable To connect'); 
        $result = mysqli_query($con,"SELECT * FROM user_details WHERE Username='" . $_POST["u_name"] . "' and Password = '". $_POST["u_pass"]."'");
        $row  = mysqli_fetch_array($result);
        if(is_array($row)) {
            $_SESSION["u_name"] = $_POST['u_name'];
            setcookie('u_name', $_POST['u_name'], time() + (86400 * 30), '/');
        } else {
            $message = "Invalid Username or Password!";
        }
    }
    if(isset($_SESSION['u_name'])){
        header("Location:home.php");
    } 
?>

<!DOCTYPE html>
<html>
<head>

    <title>Movie Trailers | Login</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="./css/styles.css">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="./js/jQuery.js"></script>
    <script src="./js/bootstrap.js"></script>
    <script type="text/javascript" src="./js/main.js"></script>

    <style>
        .login-form {
            width: 340px;
            margin: 20px;
            font-size: 15px;
        }

        .myclass {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            margin-top:15%;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
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
        <div class="myclass">
            <div class="login-form">
                <form action="" method="post">
                    <h2 class="text-center">Log in</h2>
                    <center><div style="color: red"><?php if($message != "") { echo $message; } ?></div></center>
                    <div class="form-group">
                        <input type="text" class="form-control" name="u_name" placeholder="Username" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="u_pass" placeholder="Password" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Log in</button>
                    </div>
                    <div class="clearfix">
                        <a href="#" class="float-right">Forgot Password?</a>
                    </div>
                </form>

                <p class="text-center" ><a href="./signup.php" style="color:white">Create an Account</a></p>
            </div>
        </div>
    </div>
	<div id="bottom"></div>
  	<script type="text/javascript" src="./js/main.js"></script>
</body>
</html>
