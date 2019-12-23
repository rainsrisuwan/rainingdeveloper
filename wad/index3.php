<?php
    session_start();

    $conn=mysql_connect('localhost','root','') ;
    $db=mysql_select_db('wadproject');
    ?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width">
        <title>Foodtopia| Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
  
<style>
.fstyle{

	font-style:normal;
	font-weight: 100;
	font-size:120%;
	font-family:Avantgarde, sans-serif;	
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
                        <li class="current"><a href="index.php">Home</a></li>
                        <li><a href="Menu.php">Menu</a></li>
                        <li><a href="About us.php">About Us</a></li>
                        <li><a href="FAQ.php">FAQs</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="CheckOut.php"><img src="images/p6.png" alt="cart"></a></li>
  

                  </ul>
                </nav>
            </div>
        </header>

           


<div class="fstyle" align="right">Welcome <?php echo $_SESSION['username'];?>&nbsp;-<i><a href="logout.php">&nbsp;Logout</a></i></div>




     <section id="slider">
            <div class="s-container">
                <figure>
                    <img src="images/1.jpg"/>
                    <img src="images/c5.jpg"/>
                    <img src="images/na1.jpg"/>
                    <img src="images/p2.jpg"/>
                </figure>
            </div>
        </section>

        </br>
        </br>
        </br>
        </br>

        <section id="video">
            <div class="v-container">
                <video width="100%" controls >
                    <source src="images/v1.mp4" type="video/mp4">
                    Your browser does not support HTML5 video.
                </video>
            </div>
        </section>

        </br>
        </br>
        </br>

        <section id="how">
            <div class="container">
                <h2>How it works ?</h2>
                </br>
                </br>
                <figure>
                    <img src="images/p5.png">
                </figure>
            </div>
        </section>

        </br>
        </br>
        </br>
        </br>

</script>

        <section id="newsletter">
            <div class="container">
                <h1>Subcribe to our newsletter</h1>
                <form method="get" action="index.php" >
                    <input type="email" name="email" placeholder="Enter Email...">
                    <button type="submit" name="subscribe"class="bu1" onclick="myF()">Subscribe</button>
                </form>
            </div>
        </section>

        <?php 
        if(isset($_GET['subscribe'])) {
        $email =  mysql_real_escape_string($_GET['email']);
        
        $res=mysql_query("INSERT INTO subs (email) VALUES ('$email')");
       
            if (!$res) {
                die('Invalid query: ' . mysql_error());
            } else  {
                
            }
        
        }
        ?>

        <script>
            function myF() {
                alert("Thank you for subscribing!");
            }
        </script>




    <section id="boxes">
            <div class="container">
                <h1>Payment Methods</h1>
                    </br>


                <!--<div class="box">
                    <img src="images/p1.png"alt="Visa and Mastercard icon">
                </div>

                <div class="box">
                    <img src="images/p2.jpg" alt="m2u icon">
                </div>

                <div class="box">
                    <img src="images/p3.png" alt="Cimb cliks icon">-->
 
                 <div class="box">
                    <img src="images/p4.png" alt="COD icon">
                </div>

                </div>                
            </div>
        </section>

        <footer>
            <p>Foodtopia, Copyright &copy; 2017</p>
        </footer>
    </body>

    <?php

    if ($conn){
        echo "connected babeh.";
    }else{
        echo ('Error');
    }
    if ($db){
        echo "found babeh";
    }else{
        echo ('Error');
    }


    
?>
</html>
