<!doctype html>
<?php 
$conn = mysqli_connect("localhost", "root", "", "wadproject");
$sql = "SELECT * FROM food";
$result = mysqli_query($conn, $sql);
$num = mysqli_num_rows($result);


?>

<html>
    
<head>
       
<meta charset="utf-8">
        
<meta name ="viewport" content="width=device-width">
        
<title>Foodtopia| Menu</title>
        
<style>

 * { margin: 0px;padding: 0px; box-sizing: border-box; }
  
body{
        font-family: Arial, Helvetica, sans-serif;
        font-size:15px;
        line-height: 1.5;
        padding 0;
        background-color: #ffffff;
        }
       

 header{
        background:#4d3047;
        padding-top:5px;
        min-height: 50px;
        border-bottom:#bf979f 3px solid;
        }

       

 header a{
            color:#ffffff;
            text-decoration: none;
            text-transform: uppercase;
            font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            font-size: 20px;
        }

        

header ul{
            margin:0;
            padding:0;
        }
        
        

header li{
            float:left;
            margin-top: 25px;
            display:inline;
            padding: 0 20px 0 20px; 
        }
        

header li img{
            height:35px;
            width: 35px;
        }
        
header nav{
            float:right;
            margin-top: 10px;
        }

       
 header a:hover{
            colour:#cccccc;
            font-weight:bold;
        }

header .current a{
        color:#744d63;
        font-weight: bold;
    }
            
/*global*/
 .container{
                width:95%;
                margin: auto;
                overflow: hidden;
            }

            

.logo img{
                margin-top: 0;
                float: left;
                width: 150px;
                height: 80px;
            }

            

ul{
                margin: 0;
                padding:0;
            }

           

 table {
                border-collapse: collapse;
                width: 60%;
                margin-top: 50px;
                margin-left: auto;
                margin-right: auto;
                margin-bottom: auto;
            }

            

td {
                font-size: 14px;
                padding-right: 25px;
                padding-left: 25px;
                padding-top: 7px;
                padding-bottom: 7px;
            }

            

th {
                text-align: left;
                font-size: 30px;
                color: #e65c00;
                background: #ffffff;
                padding-right: 25px;
                padding-left: 25px;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            

/*footer*/
            footer{
                background:#4d3047;
                border-top:#bf979f 3px solid;
                padding: 10px;
                margin-top: 20px;
                text-align: center;
                font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
            }

           

 footer p{
                color: #ffffff;
            }

            .bold18 {
            font-size: 18px;
            font-weight: bold;
            }
            </style>
     </head>

<body> 
        
<header>
            
<div class="container">
                
<div class="logo">
                
<div ><img src="images/ftlogo.png" alt="Foodtopia icon"></div>
                
</div><!--
                
<div id="nav1">
                    
<ul >
                    
<li><a href="*">Login</a></li>
                    
<li><a href="*">MyCart</a></li>
                    
</ul>
                
</div>-->

                
<nav>
                    
<ul>
                        
<li><a href="index.php">Home</a></li>
                        
<li class="current"><a href="Menu.php">Menu</a></li>
                        
<li><a href="About us.php">About Us</a></li>
                        
<li><a href="FAQ.php">FAQs</a></li>
                        
<li><a href="Login.php">Login</a></li>
                        
<li><a href="CheckOut.php"><img src="images/p6.png" alt="cart"></a></li>
                    
</ul>
                
</nav>
            
</div>
        
</header>

<section id="main">
            
<div class="container">

<?php
if ($num > 0) { ?>
      
        <form>         
        <table border="0" cellpadding="0px">
        <tr>                                
        <th colspan="3" style="font-size: 40px">Food Menu</th>                            
        </tr> 
        <?php
        while ($num > 0) { 
        ?>          
        <tr>
        <?php
        $x = 3;
        while ($x > 0 && $num>0){
        $row = mysqli_fetch_assoc($result)
        ?>   

        <td >
        <table border="0">
            <tr style="text-align: center"><td colspan="2"><img src="<?php echo "{$row['fpic']}"; ?>" alt="food pic" style="width:250px; height: 200px;"></td></tr>
            <tr><td colspan="2"><b><?php echo "{$row['fname']}"; ?></b></td></tr>
            <tr>
                <td style="font-size: 25px; text-align: left;">
                    <b><?php echo "{$row['fprice']}"; ?></b>
                </td>
                <td style="text-align: right; ">
                    <input type="image" src="images/add.png" alt="Add" name="add" style="width:40px;height:40px;" title="Add to cart"/>
                </td>
            </tr>
        </table>
        </td>

        <?php
        $x--;
        $num--;
        }
        ?>           
        </tr>
        <?php 
        }  
        ?> 
</table>             
        </form>
<?php 
} ?>         

            
</div>
        
</section>

        
<footer>
            
<p>Foodtopia, Copyright &copy; 2017</p>
        
</footer>

    
</body>

</html>