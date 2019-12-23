<?php
	session_start();
	$db = mysqli_connect("localhost", "root", "", "wadproject");

	if(isset($_POST['register_btn'])) {
		session_start();
		$username =  mysql_real_escape_string($_POST['username']);
		$email =  mysql_real_escape_string($_POST['email']);
		$password =  mysql_real_escape_string($_POST['password']);
		$password2 =  mysql_real_escape_string($_POST['password2']);
	

	if ($password == $password2) {

		$password = md5($password);
		$sql = "INSERT INTO users(username, email, password) VALUES('$username', '$email', '$password')";
		mysqli_query($db, $sql);
		$_SESSION['message'] = "You are registered";
		$_SESSION['username'] = $username;
		header("location: index.php");
	}

	else {
		$_SESSION['message'] = "The password did not match";
	
	}

	}

?>

<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width">
        <title>Foodtopia| Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <style>
        	.r-container{
	        width:50%;
	        margin: auto;
	        overflow: hidden;
	    	}
        </style>
	
     </head>


    <body> 

        <header>
            <div class="container">

                <div class="logo">
                	<div ><img src="images/ftlogo.png" alt="Foodtopia icon"></div>
                </div>

                <nav>
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="Menu.php">Menu</a></li>
                        <li><a href="About us.php">About Us</a></li>
                        <li><a href="FAQ.php">FAQs</a></li>
                        <li class="current"><a href="Login.php">Login</a></li>
                        <li><a href="CheckOut.php"><img src="images/p6.png" alt="cart"></a></li>
                    </ul>
                </nav>
            </div>
        </header>
		
	<section id="main">	

		<div id="r-container">
			<div class="header">
				<h1>Sign Up to proceed </h1>
			</div>

			<?php
				if(isset($_SESSION['message'])) {
					echo "<div id='error_msg'>".$_SESSION['message']."</div>";
					unset($_SESSION['message']);
				}
			?>
			
				<form method="post" action="register.php" padding="20px">
					
						<font size="6">Sign Up Form</font>
							<br><br>

							<tr>
							<td>Username:</td>
							<td><input type="text" name="username" class="textInput"></td>
							</tr>

							<tr>
							<td>Email:</td>
							<td><input type="email" name="email" class="textInput"></td>
							</tr>

							<tr>
							<td>Password:</td>
							<td><input type="password" name="password" class="textInput"></td>
							</tr>

							<tr>
							<td>Repeat password:</td>
							<td><input type="password" name="password2" class="textInput"></td>
							</tr>

							<tr>
							<td></td>
							<br><br>
							<td><input type="submit" name="register_btn" value="Sign Up"></td>

							<br>
							<div>Already registered ?<a href="Login.php"> Click here to login</a></div>
					
				</form>
			</div>
		</section>

		<footer>
			<p>Foodtopia, Copyright &copy; 2017</p>
		</footer>
		
</body>
</html>