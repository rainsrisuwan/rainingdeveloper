<?php
   session_start();

    $conn=mysql_connect('localhost','root','') ;
    $db=mysql_select_db('wadproject');

    if(isset($_POST['Pay_btn'])) {
		
		$n =  mysql_real_escape_string($_POST['name']);
		$e =  mysql_real_escape_string($_POST['email']);
		$p =  mysql_real_escape_string($_POST['phone']);
		$a1 =  mysql_real_escape_string($_POST['add1']);
        $a2 =  mysql_real_escape_string($_POST['add2']);
		$ta =  mysql_real_escape_string($_POST['ToAdd']);
		$dd =  mysql_real_escape_string($_POST['del_date']);
		$dt =  mysql_real_escape_string($_POST['del_time']);
		$rn =  mysql_real_escape_string($_POST['R_name']);
		$rp =  mysql_real_escape_string($_POST['R_phone']);
		$sq =  mysql_real_escape_string($_POST['S_req']);

        $res=mysql_query("INSERT INTO Checkout (name,email,phone,add1,add2,ToAdd,del_date,del_time,R_name,R_phone,S_req) VALUES ('$n' ,'$e' ,'$p', '$a1', '$a2', '$ta', '$dd', '$dt', '$rn', '$rp', '$sq' )");
           
            if (!$res) {
                die('Invalid query: ' . mysql_error());
            } else  {
                // Do here what you need
            }
    }
?>


<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width">
        <title>Foodtopia| Check Out</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 
 <script>
                        document.getElementById("nS1").onclick = function() {my2()};

                        function my1() {
                            document.getElementById("S1").style.display = "block";
                            document.getElementById("S2").style.display = "none";
                            document.getElementById("S3").style.display = "none";
                            document.getElementById("S4").style.display = "none";
                        }

                        function my2() {
                            document.getElementById("S1").style.display = "none";
                            document.getElementById("S2").style.display = "block";
                            document.getElementById("S3").style.display = "none";
                            document.getElementById("S4").style.display = "none";
                        }

                        function my3() {
                            document.getElementById("S1").style.display = "none";
                            document.getElementById("S2").style.display = "none";
                            document.getElementById("S3").style.display = "block";
                            document.getElementById("S4").style.display = "none";
                        }

                        function my4() {
                            document.getElementById("S1").style.display = "none";
                            document.getElementById("S2").style.display = "none";
                            document.getElementById("S3").style.display = "none";
                            document.getElementById("S4").style.display = "block";
                        }
      </script>
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
                        <li><a href="Login.php">Login</a></li>
                        <li class="current"><a href="CheckOut.php"><img src="images/p6.png" alt="cart"></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="Head">
            <div class="c-container">
                <h1>Check Out</h1>
            </div>
        </section>

        <aside id="summ">
            <div class="c-container">
                <hr class="col s12 hide-on-med-and-up">
                <div class="col l4 m4 s10 push-s1" id="summary">

                <div id="summary-wrapper" class="row">
                    <h2 class="col s12" style="">Order Summary</h2>
                    <div style="padding-left: 10px;padding-right: 10px;">
                    <hr class="col s12 order-summary-hr">
                    </div>

                    <div id="items" class="col s12">
                    loading...
                </div>

                <div id="items-addon" class="col s12">

                </div>

                <div class="subtotals col s12" style="padding-bottom: 10px;">

                    <div>
                    <div id="meal-box" class="col s7 subtotal-title">

                    </div>
                    <div id="meal-box-price" class="col s5 subtotal-price">

                    </div>
                    </div>

                    <div class="hidden">
                    <div class="col s7 subtotal-title">
                        Add-on(s)
                    </div>
                    <div id="add-on-price" class="col s5 subtotal-price">

                    </div>
                    </div>

                    
                    <hr class="order-summary-hr">

                    <div>
                    <div class="col s7 subtotal-title">
                        Discount <span id="code-txt"></span>
                    </div>
                    <div id="discount-price" class="col s5 subtotal-price">

                    </div>
                    </div>

                    <div>
                    <div class="col s7 subtotal-title">
                        Delivery fee
                    </div>
                    <div id="delivery-price" class="col s5 subtotal-price">

                    </div>
                    </div>

                </div>

                <div class="subtotals col s12" style="">

                    <div>
                    <hr class="order-summary-hr">
                    <div class="col s6 subtotal-title" style="text-align: left;line-height: 25px;">
                    Total
                    </div>
                    <div id="total-price" class="col s6 subtotal-price" style="font-size:25px;font-weight:bold;line-height: 30px;break-inside: avoid;">

                    </div>
                </div>

                </div>

                </div>

                </div>

                <div class="col l4 m4 s12 right" id="promocode-box">
                <div class="col s12" style="padding-top: 10px;padding-bottom: 20px;">
                <div>
                    <h3 class="summary-box-title"><span style="font-weight:bold;float:left;margin-bottom: 10px;">PROMO CODE</span></h3>
                </div>
                <div>
                    <input type="hidden" id="promo_code" value="">
                    <div class="summary-box-title" style="clear: both;">
                        <input id="promo-code-input" type="text" style="width:150px;float: left;clear: left;" value="">
                        <button id="promo-btn" class="btn" style="height: 20px;">Apply</button>
                    </div>
                </div>

                <div id="promo-code-error" style="float:left;clear:both;color:red;" class="hidden"></div>

                    <div id="promo-code-display" class="hidden">
                        <div id="promo-code-text" style="float:left;clear:both;"></div>
                        <div id="promo-code-result" style="float: left;clear: left;"></div>
                    </div>
                </div>
                </div>
            </div>
        </aside>

        </br>

        <section id="Step1">
            <div class="c-container">
                
                <div id="step-1-content"  >
                    <h2 id="step-1-title" id="S1" class="infos-step-title" >Step 1 - Personal Details</h2>
                        <form method="post" action="checkout.php">
                        <div id="step-1-content" id="S1"style="display: block">
                            <div class="info-box" >

                                <div class="left">* Name:</div>
                                <input id="na" name="name" placeholder="Ama Cullen" required>

                                <div class="left">* Email:</div>
                                <input id="em" name="email" placeholder="cullen@gmail.com" type="email" required>

                                <div class="left">* Mobile Phone Number:</div>
                                <input id="no" name"phone" placeholder="010" required>

                                <div class="info-box" >
                                    <input id="nS1" type="submit" onclick="my2()" value="Next" class="textI"> <span id="status"></span>
                                </div>
                            </div>
                        </form>

                    
                </br>
            </div>
        </section>
        
        </br>

        <section id="Step2">
            <div class="c-container">
                <div target="2" class="col s12 step-btn" style="padding: 0px;">
                    <h2 id="step-2-title" onclick="my2()" class="infos-step-title">Step 2 - Delivery Address</h2>
                </div>
                <form method="GET" action="checkout.php">
                     <div id="step-2-content" id="S2" style="display: none">
                        <div class="col s12 m12 l12 info-box" style="padding: 10px;">

                            <div class="left">* Address Line 1:</div>
                            <input id="address-line-1" type="text" name="add1" placeholder="eg.L3.2-1/02-03-12" required>

                            <div class="left">Address Line 2 (Optional):</div>
                            <input id="address-line-2" type="text" name="add2" placeholder="eg.V3C/Building 2" required>

                            <div class="col s12 m12 l12" style="margin-bottom: 0px;">
                                <div class="left">Type of Address:</div>

                                    <div class="left" style="clear:left;">
                                        <select name="ToAdd" id="type-of-address-cb" required>
                                        <option value="Resident">Village</option>
                                        <option value="Business">Academic Building</option>
                                        </select>
                                    </div>
                            </div>
                            <input id="nS2" type="button" onclick="my3()"name="nS2" value="Next" class="textI">
                        </div>
                    </div>
                </form>
            </div>
        </section>

        </br>

        <section id="Step3">
            <div class="c-container">
            <div target="3" class="col s12 step-btn" style="padding: 0px;">
                <h2 id="step-3-title" onclick="my3()" class="infos-step-title">Step 3 - Delivery Date And Time</h2>
            </div>

            <div id="step-3-content" id="S3" style="display: none">
                <div class="col s12 m12 l12 info-box" style="padding: 10px;">
                <form method="GET" action="checkout.php">
                <div class="col s12">
                    <div style="float:left;margin-right: 30px;">
                        <div class="left">* Deliver Date:</div>
                        <div style="width: 200px;"><input id="delivery_date" name="del_date" type="date" class="left datepicker" placeholder="-"required></div>
                    </div>
                    
                   
                    <div class="left">* Deliver Time:</div>
                    
                        <select id="delivery_time" name="del_time"required>
                        <option selected value="8am-9pm">8am - 9am</option>
                        <option class="disable-sat" value="10pm-12pm">10am - 12pm</option>                        
                        <option class="disable-sat" value="2pm-4pm">2pm - 4pm</option>
                        <option class="disable-sat" value="5pm-7pm">5pm - 7pm</option>
                        <option class="disable-sat" value="8pm-10pm">8pm - 10pm</option>
                        </select>
                    
                    
                </div>

                </br>

                <div class="col s12 m12 l12">

                    <div class=" left">* If you aren't in, where should we leave your box?</div>
                    <div style="width:300px;">
                    <select id="if_not_in">
                        <option value="We'll be waiting, just ring the door bell.">We'll be waiting, just ring the door bell.</option>
                        <option value="Please pass to our neighbours">Please pass to our neighbours</option>
                    </select>
                    </div>

                    </br>

                    <div class="left" style="clear:both;">Recipient Information:</div>

                    <div class="" style="margin-bottom:10px;clear: both;text-align: left;">
                    <input type="checkbox" class="filled-in" id="same-as-above" />
                    <label for="same-as-above">Same as personal details at previous step</label>
                    </div>

                    <div class="left">* Recipent Name:</div>
                    <input id="recipient-name" name="R_name" type="text">

                    <div class="left">* Recipient Contact:</div>
                    <input id="recipient-contact" name="R_phone" type="text">

                    <div class="left">Special Request:</div>
                    <input id="special_request" name="S_req" type="text">
                    </br>
                    </br>
                     <input id="nS3" type="button" onclick="my4()" name="nS3" value="Next" class="textI">
                </div>
                </form>

                </div>

            </div>
            </div>

        </section>

        </br>

        <section id="Step4">
            <div class="c-container">
                <div target="4" class="col s12 step-btn" style="padding: 0px;">
                    <h2 id="step-4-title"  class="infos-step-title">Step 4 - Payment</h2>
                </div>

                <div id="step-4-content" id="S4" style="display: none">

                    <div class="col s12 m12 l12 info-box" style="padding: 10px;">
                        <div class="col s12 m12 l12">

                            <div style="float:left;clear:both;margin-bottom: 10px;">
                                <div class="left" style="margin-right: 30px;">* Payment Method:</div>
                                <div style="clear:left;float: left;">
                                <input name="payment-method" value="cash-on-delivery" type="radio" id="cash-on-delivery"/>
                                <label for="cash-on-delivery">Cash On Delivery</label>
                                </br>
                                <form method="GET" action="checkout.php">
                                    <input type="submit" name="Pay_btn" value="Pay Now" class="textIn" >
                                </form>
                            </div>
                        </div>

                    </div>
                    
                    <div id="error_step_4" class="col s12 hidden"><div style="color:red;">All fields with (*) are required.</div></div>
                    
                </div>
                
            </div>

        </section>

        

        <footer>
            <p>Foodtopia, Copyright &copy; 2017</p>
        </footer>
    </body>
</html>





                                                <!--<div class="left">* Area:</div>
                                                <input id="area" type="text" placeholder="eg.UTP" value="">
                                                
                                                <div class="row">

                                                <div class="col s6">
                                                    <div class="left" style="clear:both;">* Postcode:</div>
                                                    <input id="postcode" type="text" placeholder="eg.32610" value="">
                                                </div>

                                                <div class="col s6">
                                                    <div class="left">* City/State:</div>
                                                    <div class="left" style="clear:both;">
                                                    <select id="city-cb">
                                                        <option  value="Perak">Perak</option>
                                                    </select>
                                                    </div>
                                                </div>

                                                </div>
                                                
                                                </div>


                                                <div id="error_correct_address" class="col s12 hidden"><div style="color:red;">We can not find your address in map. Please enter correct address.</div>
                                                </div>
                                                <div id="error_address" class="col s12 hidden"><div style="color:red;">Your address is not in our shipping coverage. Please check our <a class="shipping-modal-trigger" style="color:#ff7272;" href="#shipping-modal">shipping coverage</a>.</div></div>

                                                <div id="error_step_2" class="col s12 hidden"><div style="color:red;">All fields with (*) are required.</div></div>

                                                </br>

                                                <input type="submit" name="register_btn" value="Next" class="textI">-->