<!DOCTYPE html>
<html lang='en_US'>
    <head>
        <title>Manager Product Each Week</title>
        <style>
            html, body {
                width: 100%;
                margin: 0;
            }
            body {
                background-color: white;
            }
            h1 {
                margin-left: 15px;
                color: blue;
            }
            h2 {margin-left: 30px;}
            h3 {margin-left: 36px;}
            p {margin-left: 40px;}
            input {width: 120px;}

            .div_head {
                width: 100%;
                height: 200px;
                background-image: url('/Image/header1.jpg');
                background-size: 100% 200px;
                background-repeat: no-repeat;
                position: relative;
                animation-name: headpage;
                animation-duration: 12s;
                animation-delay: 4s;
                animation-iteration-count: infinite;
            }
            @keyframes headpage {
                0%  {background-image: url('/Image/header1.jpg')}
                50% {background-image: url('/Image/header2.jpg')}
                100%{background-image: url('/Image/header3.jpg')}
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                border: 1px solid #e7e7e7;
                background-color: black;
            }

            li {
                float: left;
                
            }

            li button {
                display: block;
                color: white;
                background-color: black;
                text-align: center;
                font-family: Garamond, serif;
                font-size: 24px;
                padding: 14px 16px;
                text-decoration: none;
                box-shadow: 0 3px #999;
            }

            li button:hover() {
                background-color: #ddd;
            }


            .error {
                color: #FF0000;
                left: 5px;
            }
            
            .div_design {
                float: left;
                width: 49.5%;
                height: 500px;
                border: 2px solid green;
            }
            .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }
            #sp {
                display: none;
            }

            #tk {
                display: block;
            }

            #lh {
                display: none;
            }

        </style>
        <meta name="description" content="A simple design PHP web for my subject exam">
        <meta name="author" content="NguyenNhatTung_20002177">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
        </script>
    </head>
    <body onload="draw_Chart()">
        <!-- Heading Web -->
        <div class="div_head">
            <h1>Manager Production - My Company</h1>
        </div>
        <ul>
            <li><button onclick="show_Sp()">Products</button></li>
            <li><button onclick="show_Tk()">Statistic</button></li>
            <li><button onclick="show_Lh()">Contact</button></li>
        </ul>

        <div id="sp">
            <p>Something</p>
        </div>

        

        <div id="tk">
            <?php
                print "";
                print "<h2>Sale in Week</h2>";

                $product = "";
                $Monday = $Tuesday = $Wednesday = $Thursday = $Friday = $Saturday = $Sunday = 0;
                $MonErr = $TuesErr = $WednesErr = $ThursErr = $FriErr = $SaturErr = $SunErr = "";
                $Err = "You didn't choose the quantity";
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $product = test_input($_POST["product"]);
                    if (empty($_POST["monday"])){
                        $MonErr = $Err;
                    }else{
                        $Monday = test_input($_POST["monday"]);
                    }
                    
                    if (empty($_POST["tuesday"])){
                        $TuesErr = $Err;
                    }else{
                        $Tuesday = test_input($_POST["tuesday"]);
                    }

                    if (empty($_POST["wednesday"])){
                        $WednesErr = $Err;
                    }else{
                        $Wednesday = test_input($_POST["wednesday"]);
                    }
                    
                    if (empty($_POST["thursday"])){
                        $ThursErr = $Err;
                    }else{
                        $Thursday = test_input($_POST["thursday"]);
                    }

                    if (empty($_POST["friday"])){
                        $FriErr= $Err;
                    }else{
                        $Friday = test_input($_POST["friday"]);
                    }

                    if (empty($_POST["saturday"])){
                        $SaturErr = $Err;
                    }else{
                        $Saturday = test_input($_POST["saturday"]);
                    }

                    if (empty($_POST["sunday"])){
                        $SunErr = $Err;
                    }else{
                        $Sunday = test_input($_POST["sunday"]);
                    }
                    
                    
                    //Calculate the change rate for next step
                    $change1 = $Tuesday - $Monday;
                    $change2 = $Wednesday - $Tuesday;
                    $change3 = $Thursday - $Wednesday;
                    $change4 = $Friday - $Thursday;
                    $change5 = $Saturday - $Friday;
                    $change6 = $Sunday - $Saturday;
                    
                }


                function test_input($data){
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                
            ?>
            
            
            <div class="clearfix">
                <div class="div_design" style="padding-left: 10px;">
                    <h1>Statistics</h1>
                    <form method="post" class="form_design" style="font-size: 18px;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                        Production: <select name="product" style="font-size: 18px;">
                            <option value="Apple MacBook Air M1 2020">Apple MacBook Air M1 2020</option>
                            <option value="Asus VivoBook Go 14">Asus VivoBook Go 14</option>
                            <option value="MSI GF63 Thin">MSI GF63 Thin</option>
                            <option value="MSI Gaming Bravo 15">MSI Gaming Bravo 15</option>
                        </select>
                        <br><br>
                        Monday: <input type="number" name="monday"> <span class="error"><?php print $MonErr?></span>
                        <br><br>
                        Tuesday: <input type="number" name="tuesday"> <span class="error"><?php print $TuesErr?></span>
                        <br><br>
                        Wednesday: <input type="number" name="wednesday"> <span class="error"><?php print $WednesErr?></span>
                        <br><br>
                        Thursday: <input type="number" name="thursday"> <span class="error"><?php print $ThursErr?></span>
                        <br><br>
                        Friday: <input type="number" name="friday"> <span class="error"><?php print $FriErr?></span>
                        <br><br>
                        Saturday: <input type="number" name="saturday"> <span class="error"><?php print $SaturErr?></span>
                        <br><br>
                        Sunday: <input type="number" name="sunday"> <span class="error"><?php print $SunErr?></span>
                        <br><br>
                        <input type="submit" name="submit" value="Submit" style="width: 200px; background-color: red;">  
                    </form>
                </div>
                <div class="div_design">
                    <h1 style="align: center;">Sale Chart</h1>
                    <canvas id="sale_Chart" style="position: relative;width: 99.9%; height:84%; background-color: white; border: 1px solid black;">
                        
                    </canvas>
                    
                </div>
                
            </div>
            
            
            <?php
                print "<br> <br>";
                print "<h3>Collect Information:</h3>";
                print "<p>Product: " .$product. "</p>";
                print "<p>Total: ".$$Monday+$Tuesday+$Wednesday+$Thursday+$Friday+$Saturday+$Sunday."</p><br>";
            ?>
        </div>
        <div id="lh">
            <div>
                <p>
                    <i>Created by <a href="mailto: nasuss15@gmail.com">NguyenNhatTung_20002177</a></i>
                </p>
                <p>Phone: 0399402431</p>
                <p>The project used to present in Applied Informatics Subject.</p>
            </div>
        </div>
        
        
        
    </body>
    <script>
        //Function display each div when click to menu 
        function show_Sp() {
            document.getElementById("sp").style.display = "block";
            document.getElementById("tk").style.display = "none";
            document.getElementById("lh").style.display = "none";
        }
        function show_Tk() {
            document.getElementById("sp").style.display = "none";
            document.getElementById("tk").style.display = "block";
            document.getElementById("lh").style.display = "none";
        }

        function show_Lh() {
            document.getElementById("sp").style.display = "none";
            document.getElementById("tk").style.display = "none";
            document.getElementById("lh").style.display = "block";
        }
    </script>

    <script>
        const Mvalue = <?php echo $Monday?>;
        const c1 = <?php echo $change1?>;
        const c2 = <?php echo $change2?>;
        const c3 = <?php echo $change3?>;
        const c4 = <?php echo $change4?>;
        const c5 = <?php echo $change5?>;
        const c6 = <?php echo $change6?>;
        var barColor = ["brown", "green", "yellow", "orange", "black", "blue", "red"]
        const xValues = ["Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"];
        function draw_Chart(){
            new Chart("sale_Chart", {
            type: "bar",
            data: {
                labels: xValues,
                datasets: [{ 
                    backgroundColor: barColor,
                    data: [Mvalue, Mvalue+c1, Mvalue+c1+c2, Mvalue+c1+c2+c3,Mvalue+c1+c2+c3+c4, Mvalue+c1+c2+c3+c4+c5, Mvalue+c1+c2+c3+c4+c5+c6],
                    borderColor: "yellow",
                    fill: false
                }]
            },
            options: {
                legend: {display: false}
            }
        });
        }
        
        setInterval(drawChart, 1000);
        
    </script>


    
</html>