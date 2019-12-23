<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name ="viewport" content="width=device-width">
        <title>Foodtopia| About us</title>
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
                        <li class="current"><a href="About us.php">About Us</a></li>
                        <li><a href="FAQ.php">FAQs</a></li>
                        <li><a href="Login.php">Login</a></li>
                        <li><a href="CheckOut.php"><img src="images/p6.png" alt="cart"></a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <section id="about us">
                <div class="row a-container">
                    </br>
                    </br>
                    </br>
                    <div class="col-3 menu butang">
                        <p><button type="button" onclick="my1()">Contact Us</button></p></br>
                        <p><button type="button" onclick="my2()">Shiza Cake</button></p></br>
                        <p><button type="button" onclick="my3()">Umiada Pizza</button></p>
                    </div>

                    <div class="col-6">
                        <div id="coUs" style="display: block">
                        <h1>Contact Us</h1>
                            <p id="p02"><span class="spbold">Name </span> Nur Dalila Najwa bt Muhd Rosli</p>
                            <p id="p02"><span class="spbold">Email </span> pu3lana@gmail.com</p>
                            <p id="p02"><span class="spbold">Address </span> Village 3, UTP</p>
                            <p id="p02"><span class="spbold">Inquiry </span> 0111-2454 919</p>
                            </div>

                            <div id="Sup1" style="display: none">
                            <h1>Shiza cake</h1>
                            <p id="p02"><span class="spbold">Owner Name </span> Roshida Mohd Salidin</p>
                            <p id="p02"><span class="spbold">Live </span> Bandar Barus Putih</p>
                            <p id="p02"><span class="spbold">Shop Name </span> Shiza Cake &amp Catering</p>
                            <p id="p02"><span class="spbold">Opening Hours </span> 10 a.m - 9p.m</p>
                            <p id="p02"><span class="spbold">Delivery </span> Available</p>
                            <p id="p02"><span class="spbold">Boss </span> Owner</p>
                            <p id="p02"><span class="spbold">Worker </span> Owner</p>
                            <p id="p02"><span class="spbold">Selling </span> pudding, bread, cake, catering, doorgift, western food, cupcake, nasi berlauk, kuih.</p>
                            <p id="p02"><span class="spbold">How to Order </span>Order need to be place at least 2 days before pick up. Only available during weekend except for cake.</p>
                            <p id="p02"><span class="spbold">Open Since </span> 2010</p>
                            </div>

                            <div id="Sup2" style="display: none">
                            <h1>Umiada Pizza</h1>
                                <p id="p02"><span class="spbold">Owner Name </span> Najihah Majid</p>
                            <p id="p02"><span class="spbold">Live </span> No 68, Susur U5, Bandar U</p>
                            <p id="p02"><span class="spbold">Shop </span> (work at home)</p>
                            <p id="p02"><span class="spbold">Delivery </span> Bota on Weekday, Tronoh on Weekend</p>
                            <p id="p02"><span class="spbold">Brand </span> Umiada Pizza</p>
                            <p id="p02"><span class="spbold">Boss </span> Owner</p>
                            <p id="p02"><span class="spbold">Worker </span> Owner and husband</p>
                            <p id="p02"><span class="spbold">Selling </span> 100% homade pizza, macaroni cheese, dessert(fruits)</p>
                            <p id="p02"><span class="spbold">Pizza topping </span></p>
                            <ol>
                                <li>Chicken</li>
                                <li>Meat</li>
                                <li>Mix (half chicken, half meat)</li>
                                <li>Special (extra cheese, extra topping)</li>
                            </ol>
                            <p id="p02">Size 11", regular, 8 slices</p>
                            <p id="p02"><span class="spbold">How to Order </span>Anytime</p>
                            </div>
                    </div>

                    <script>
                        function my1() {
                            document.getElementById("coUs").style.display = "block";
                            document.getElementById("Sup1").style.display = "none";
                            document.getElementById("Sup2").style.display = "none";
                        }

                        function my2() {
                            document.getElementById("coUs").style.display = "none";
                            document.getElementById("Sup1").style.display = "block";
                            document.getElementById("Sup2").style.display = "none";
                        }

                        function my3() {
                            document.getElementById("coUs").style.display = "none";
                            document.getElementById("Sup1").style.display = "none";
                            document.getElementById("Sup2").style.display = "block";
                        }
                    </script>

                        <div class="col-3 menu right">
                            <div class="aside">
                            <h1>Who we are?</h1>
                            <p><img src="images/staff.jpg" alt="staff" style="max-width:95%;height:auto;"></p>
                            <h2>Jan16 ICT BIS</h2>
                            <p>We are UTP students from batch January 2016. We are from programme ICT and BIS. Currently in 2nd year 1st semester.</p>
                            <h2>WAD Project</h2>
                            <p>
                            We are making this website for WAD project. The purpose of this website is for us to make a functioning online marketing page.</p>
                            <h2>Food Delivery</h2>
                            <p>It is a website which allow customers to select food and make order. The food will then be delivered to their door step. Our main target is UTP community.</p>
                        </div>
                    </div>
                </div>
        </section>

        <footer>
            <p>Foodtopia, Copyright &copy; 2017</p>
        </footer>

    </body>
</html>
