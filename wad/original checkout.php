<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width">
        <title>Foodtopia| Check Out</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
 
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
            <div class="container">
                <h2>Check Out</h2>
            </div>
        </section>

        <section id="Step1">
            <div class="container">
                  <div target="1" class="col s12 step-btn" style="padding: 0px;">
                    <h2 id="step-1-title" class="infos-step-title">Step 1 - Personal Details</h2>
                </div>
                <div id="step-1-content" class="">
                    <div class="col s12 m12 l12 info-box" style="padding: 10px;">

                    <div class="col s12 m12 l12">

                    <div class="left">* Name:</div>
                    <input id="checkout_display_name" type="text" value="">

                    <div class="left">* Email:</div>
                    <input id="checkout_email" type="text" value="">

                    <div class="left">* Mobile Phone Number:</div>
                    <input id="checkout_mobile" type="text" value="">

                    <div class="" style="text-align: left;">Birthday:</div>
                    <input id="birthday_day" type="text" style="float:left;width:50px;margin-right: 10px;" maxlength="2" placeholder="DD" value="">
                    <input id="birthday_month" type="text" style="float:left;width:50px;margin-right: 10px;" maxlength="2" placeholder="MM" value="">
                    <input id="birthday_year" type="text" style="float:left;width:50px;margin-right: 10px;" maxlength="4" placeholder="YYYY" value="">
                </div>
        
                <div id="error_step_1" class="col s12 hidden"><div style="color:red;">All fields with (*) are required.</div></div>
                <div id="error_email" class="col s12 hidden"><div style="color:red;">Please provide valid email.</div></div>
                <div id="error_hp" class="col s12 hidden"><div style="color:red;">Please provide valid mobile number.</div></div>
            </div>
            <div class="col s12">
            <div class="left next-box">
                <a class="solid-btn" style="margin-top:10px;padding-left: 50px;padding-right: 50px;" href="javascript:next_step();">Next</a>
            </div>
        
        </section>

        <section id="Step2">
            <div class="container">
                <div target="2" class="col s12 step-btn" style="padding: 0px;">
                    <h2 id="step-2-title" class="infos-step-title">Step 2 - Delivery Address</h2>
                </div>

                <div id="step-2-content" class="">
                <div class="col s12 m12 l12 info-box" style="padding: 10px;">

                    <div class="col s12 m6 l6">
                    <div class="left">* Address Line 1:</div>
                    <input id="address-line-1" type="text" placeholder="eg.L3.2-1/02-03-12" value="">

                    <div class="left">Address Line 2 (Optional):</div>
                    <input id="address-line-2" type="text" placeholder="eg.V3C/Building 2" value="">

                    <div class="left">* Area:</div>
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

                    <div class="col s12 m6 l6" style="margin-bottom: 30px;">
                    <div id="map" class="hidden" style="height: 430px;"></div>
                    </div>

                    <div class="col s12 m12 l12" style="margin-bottom: 0px;">
                    <div class="left">Type of Address:</div>
                    <div class="left" style="clear:left;">
                        <select name="type-of-address" id="type-of-address-cb">
                        <option value="Resident">Village</option>
                        <option value="Business">Academic Building</option>
                        </select>
                    </div>
                    </div>

                    <div id="error_correct_address" class="col s12 hidden"><div style="color:red;">We can not find your address in map. Please enter correct address.</div>
                    </div>
                    <div id="error_address" class="col s12 hidden"><div style="color:red;">Your address is not in our shipping coverage. Please check our <a class="shipping-modal-trigger" style="color:#ff7272;" href="#shipping-modal">shipping coverage</a>.</div></div>

                    <div id="error_step_2" class="col s12 hidden"><div style="color:red;">All fields with (*) are required.</div></div>

                    <div class="col s12">
                        <div class="left next-box">
                        <a class="solid-btn"  href="javascript:next_step();">Next</a>
                    </div>
                </div>

                </div>
            </div>
            </div>
        </section>

        <section id="Step3">
            <div class="container">
            <div target="3" class="col s12 step-btn" style="padding: 0px;">
                <h2 id="step-3-title" class="infos-step-title">Step 3 - Delivery Date And Time</h2>
            </div>

            <div id="step-3-content" class="">
                <div class="col s12 m12 l12 info-box" style="padding: 10px;">

                <div class="col s12">
                    <div style="float:left;margin-right: 30px;">
                        <div class="left">* Deliver Date:</div>
                        <div style="width: 200px;"><input id="delivery_date" type="date" class="left datepicker" placeholder="-"></div>
                    </div>
                    
                    <div style="float:left;">
                    <div class="left">* Deliver Time:</div>
                    <div style="width:150px;">
                        <select id="delivery_time">
                        <option selected value="10am-12pm">10am - 12pm</option>
                        <option class="disable-sat" value="1pm-3pm">1pm - 3pm</option>
                        <option class="disable-sat" value="5pm-7pm">5pm - 7pm</option>
                        </select>
                    </div>
                    </div>
                </div>

                <div class="col s12 m12 l12">

                    <div style="text-align: left;">* If you aren't in, where should we leave your box?</div>
                    <div style="width:300px;">
                    <select id="if_not_in">
                        <option value="We'll be waiting, just ring the door bell.">We'll be waiting, just ring the door bell.</option>
                        <option value="Please pass to our neighbours">Please pass to our neighbours</option>
                    </select>
                    </div>

                    <div class="left" style="clear:both;">Recipient Information:</div>

                    <div class="" style="margin-bottom:10px;clear: both;text-align: left;">
                    <input type="checkbox" class="filled-in" id="same-as-above" />
                    <label for="same-as-above">Same as personal details at previous step</label>
                    </div>

                    <div class="left">* Recipent Name:</div>
                    <input id="recipient-name" type="text">

                    <div class="left">* Recipient Contact:</div>
                    <input id="recipient-contact" type="text">

                    <div class="left">Special Request:</div>
                    <input id="special_request" type="text">

                </div>

                <div id="error_step_3" class="col s12 hidden"><div style="color:red;">All fields with (*) are required.</div></div>

                <div class="col s12" style="margin-bottom: 30px;margin-top: 0px;">
                    <div cl next-boxass="left next-box">
                    <a class="solid-btn" style="margin-top:10px;padding-left: 50px;padding-right: 50px;" href="javascript:next_step();">Next</a>
                    </div>
                </div>

                </div>

            </div>
            </div>

        </section>

        <section id="Step4">
            <div class="container">
                <div target="4" class="col s12 step-btn" style="padding: 0px;">
                    <h2 id="step-4-title" class="infos-step-title">Step 4 - Payment</h2>
                </div>

                <div id="step-4-content" class="">

                <div class="col s12 m12 l12 info-box" style="padding: 10px;">
                    <div class="col s12 m12 l12">

                    <div style="float:left;clear:both;margin-bottom: 10px;">
                        <div class="left" style="margin-right: 30px;">* Payment Method:</div>
                        <div style="clear:left;float: left;">
                        <input name="payment-method" value="cash-on-delivery" type="radio" id="cash-on-delivery"/>
                        <label for="cash-on-delivery">Cash On Delivery</label>
                        </div>
                    </div>

                    </div>

                    <div id="error_step_4" class="col s12 hidden"><div style="color:red;">All fields with (*) are required.</div></div>

                    <button type="button" onclick="alert('Thank you')">Pay Now</button>

                    <div class="col s12" style="margin-top:0px;margin-bottom: 30px;">
                    <div class="left">
                        <a href="javascript:submit_checkout();" id="paynow-btn" class="solid-btn" style="display:inline;margin-top:10px;padding-left: 50px;padding-right: 50px;">Pay Now</a>
                    </div>
                    </div>

                </div>

                </div>

                </div>
            </div>
        </section>

        <section>
            <div class="container">
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
                    <div class="left" style="clear: both;">
                        <input id="promo-code-input" type="text" style="width:150px;float: left;clear: left;" value="">
                        <button id="promo-btn" class="btn" style="height: 46px;">Apply</button>
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
        </section>

        <footer>
            <p>Foodtopia, Copyright &copy; 2017</p>
        </footer>
    </body>
</html>
