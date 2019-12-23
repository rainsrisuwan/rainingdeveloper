
<?php
	session_start();
	session_destroy();
	unset($_SESSION['username']);
	
	header("location: index.php");

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

		<footer>
            <p>Foodtopia, Copyright &copy; 2017</p>
        </footer>

    </body>
</html>