<?php
	session_start();
	$db = mysqli_connect("localhost", "root", "", "wadproject");
	session_destroy();

	if(isset($_POST['login_btn'])) {
 		session_start();
		$username =  mysql_real_escape_string($_POST['username']);
		$password =  mysql_real_escape_string($_POST['password']);
	
		$password = md5($password);
		$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
		$result = mysqli_query($db, $sql);
		
		if (mysqli_num_rows($result) == 1) {
			$_SESSION['message'] = "You are now logged in";
			$_SESSION['username']=$username;
			header("location:index3.php");
			}
		
		else {
			$_SESSION['message'] = "username/password is incorrect";
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
			
		<div class="l-container">
					
			<div class="header">
							
				<h1>Login to proceed</h1>
							
			</div>			

			<?php
								
			if(isset($_SESSION['message'])) {
			echo "<div id='error_msg'>".$_SESSION['message']."</div>";
										
			unset($_SESSION['message']);
			}
			?>

			<form method="post" action="Login.php">
				                                   
					<font size="6">Login Form</font>
					<br><br>
										
					<tr>
					<td>Username:</td>												
					<td><input type="text" name="username" class="textInput"></td>									
					</tr>

					
										
					<tr>											
					<td>Password:</td>												
					<td><input type="password" name="password" class="textInput"></td>								
					</tr>

					<tr>                           
					<td></td>
					
					<br> <br>                          
					<td><input type="submit" name="login_btn" value="Login"></td>
						
					<br><br>
					<div>Don't have an account?<a href="register.php"> Click here to register</a></div>

																	
			</form>   
		</div>
	</section>


		
	<footer>	
		<p>Foodtopia, Copyright &copy; 2017</p>
	</footer>

 </body>

</html>
