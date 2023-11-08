<!DOCTYPE html>
<html lang='en_US'>
    <head>
        <title>Manager Product Each Week</title>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
        <style>
            html, body {
                width: 100%;
                margin: 0;
                font-family:'Sans-serif';
            }
            body {
                background-color: white;
                overflow: auto;
            }
            h1 {
                margin-left: 15px;
                color: blue;
            }
            h2 {margin-left: 30px;}
            h3 {margin-left: 36px;}
            p {margin-left: 40px;}
            input {width: 120px;
                height: 24px;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
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

            /*Tham khao tren W3School for slideshow*/
            .mySlides {display:none}
            .w3-left, .w3-right, .w3-badge {cursor:pointer}
            .w3-badge {height:16px;width:16px;padding:0}

            .fa {
                font-size: 100px;
                cursor: pointer;
                user-select: none;
            }

            .fa-thumbs-up:hover {
                color: darkblue;
            }

            .fa-thumbs-down:hover {
                color: darkred;
            }


            /*Tu nghi add button with each slide*/
            .mycontainer {position: relative;}
            .mycontainer img {
                width: 100%;
                height: 40px;
            }
            .mycontainer .btn {
                position: absolute;
                transform: translate(-50%, -50%);
                -ms-transform: translate(-50%, -50%);
                background-color: rgb(21, 101, 243);
                color: white;
                font-size: 18px;
                padding: 12px 24px;
                border: none;
                cursor: pointer;
                border-radius: 5px;
                text-align: center;
            }

            .mycontainer .btn:hover {
                background-color: rgb(15, 7, 180);
            }
            /*showProduct_container class */
            .showProduct_container {
                height: 300px;
            }

            .showProduct_container div {
                float: left;
                width: 30%;
                height: 80%;
                margin: 25px;
                justify-content: center;
                border: 1px solid black;
                border-radius: 20px;
            }

            .container label {
                font-size: 20px;
            }

            .error {
                color: #FF0000;
                left: 5px;
            }
            
            .div_design {
                float: left;
                width: 50%;
                height: 550px;
                border: 2px solid green;
            }
            .clearfix::after {
                content: "";
                clear: both;
                display: table;
            }

            /* Using in Login Screen */
            #login_screen {
                display: block;
                position: fixed;
                min-width: 600px;
                height: 600px;
                top: 150px;
                left: 25%;
                right: 25%;
                font-size: 24px;
                background-color: lightgreen;
                border: 2px solid red;
                border-radius: 24px;
                padding: 50px;
            }

            #login_screen button:hover {
                opacity: 0.8;
            }
            #login_screen input[type=text], input[type=password]{
                width: 100%;
                height: 30px; 
                padding: 12px 20px; 
                margin: 8px 0;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }
            .cancelbtn {
                width: auto;
                padding: 10px 18px;
                background-color: #f44336;
            }

            /* 3 menubar */
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
        <!--Main-->
        <div>
            <!-- Heading Web -->
            <div style="position: relative">
                <nav style="position: fixed-top">
                    <ul>
                        <li><button onclick="show_Sp()">Products</button></li>
                        <li><button onclick="show_Tk()">Statistic</button></li>
                        <li><button onclick="show_Lh()">Contact</button></li>
                        <li style="float: right;"><button onclick="logOut()">Log out</button></li>
                    </ul>

                </nav>
                <nav>
                    <div class="w3-display-container" style="width:100%; height: 250px;">
                        <div class="mySlides mycontainer">
                            <img src="/Image/header1.jpg" style="width:100%; height: 250px;">
                            <button class="btn" onclick="show_Lh()" style="top: 20%; left: 50%">Contact with us!</button>
                        </div>

                        <div class="mySlides mycontainer">
                            <img src="/Image/header2.jpg" style="width:100%; height: 250px;">
                            <a class="btn" style="top: 35%; left: 90%" href="http://localhost/phpmyadmin/index.php?route=/sql&db=products&table=products" target="_blank">View All Product</a>
                        </div>
                        
                        
                        <img class="mySlides" src="/Image/header3.jpg" style="width:100%; height: 250px">
                        
                        <div class="mySlides mycontainer">
                            <img src="/Image/header4.jpg" style="width:100%; height: 250px;">
                            <i class="fa fa-thumbs-up" style="position: absolute; top: 25%; left: 60%"></i>
                            <i class="fa fa-thumbs-down" style="position: absolute; top: 25%; left: 70%"></i>
                        </div>
                        
                        <div class="w3-center w3-container w3-section w3-large w3-text-white w3-display-bottommiddle" style="width:100%">
                            <div class="w3-left w3-hover-text-khaki" onclick="plusDivs(-1)">&#10094;</div>
                            <div class="w3-right w3-hover-text-khaki" onclick="plusDivs(1)">&#10095;</div>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(1)"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(2)"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(3)"></span>
                            <span class="w3-badge demo w3-border w3-transparent w3-hover-white" onclick="currentDiv(4)"></span>
                        </div>
                    </div>
                
                </nav>
                
                
                <div id="sp">
                    <!--PHP Code for display Add Product-->
                    <?php require_once 'connect.php' ?>
                    <?php 
                        if (isset($_POST['add'])){
                            $ten_sp = $_POST["ten_sp"];
                            $id_sp = $_POST["id_sp"];
                            $gia_sp = $_POST["gia_sp"];
                            $soluong_sp = $_POST["soluong_sp"];
                            $anh_sp = $_POST["anh_sp"];

                            //Save in mysql table
                            if ($conn -> query("INSERT INTO products (ten_sp, id_sp, soluong_sp, gia_sp, anh_sp) VALUES (N'$ten_sp', N'$id_sp', N'$soluong_sp', N'$gia_sp', N'$anh_sp')")){
                                echo "<script>alert('Add successed');</script>";
                            } else{
                                echo "<script>alert('Add not successed');</script>";
                            }
                            
                            
                        }
                        $conn -> close();
                    ?>

                    <!--Show image product-->
                    <h2>Some Product</h2>

                    <?php
                        $source = "D:/Hoc_tap/PHP_Learning/Image/"
                    ?>
                    <div class="showProduct_container">
                        <div>
                            <img src='/Image/L_1.jpg' alt="" style="width: 90%; height: 70%; padding-left: 10%;">
                            <p>Apple MacBook Air M1 2020 <br>
                                Số lượng: 500</p>
                        </div>

                        <div>
                            <img src='/Image/L_2.jpg' alt="" style="width: 90%; height: 70%; padding-left: 10%;">
                            <p>Asus VivoBook Go 14 <br>
                                Số lượng: 660</p>
                        </div>

                        <div>
                            <img src='/Image/L_3.jpg' alt="" style="width: 90%; height: 70%; padding-left: 10%;">
                            <p>MSI G63 Thin 14 <br>
                                Số lượng: 620</p>
                        </div>
                    </div>

                    <h2 style="background-color: lightgreen; width: 75%;">Add New Product Into Storage</h2>
                    <div class="container" style="border: 2px solid black; position: relative">
                        <form method="POST" action="" style="width: 100%; position: absolute">
                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="ten_sp">Tên Sản phẩm: </label>  
                                <div class="col-md-4">
                                    <input id="ten_sp" name="ten_sp" placeholder="Nhập tên sản phẩm" class="form-control input-md" required="" type="text">
                                    
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label" for="product_id">Id sản phẩm:</label>  
                                <div class="col-md-4">
                                    <input id="id_sp" name="id_sp" placeholder="Nhập Id" class="form-control input-md" required="" type="text">
                                    
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="soluong_sp">Số lượng:</label>  
                                <div class="col-md-4">
                                    <input id="soluong_sp" name="soluong_sp" placeholder="Nhập số lượng" class="form-control input-md" required="" type="text">
                                    
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="gia_sp">Giá bán: </label>  
                                <div class="col-md-4">
                                    <input id="gia_sp" name="gia_sp" placeholder="Nhập giá sản phẩm" class="form-control input-md" required="" type="text">
                                    
                                </div>
                            </div>
                

                            <!-- File Button --> 
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="anh_sp">Ảnh:</label>
                                <div class="col-md-4">
                                    <input id="anh_sp" name="anh_sp" class="input-file" type="file">
                                </div>
                            </div>

                            <!-- Button -->
                            <div class="form-group">
                                <label class="col-md-4 control-label" for="add"></label>
                                <div class="col-md-4">
                                    <button id="add" name="add" class="btn btn-primary">Add Product</button>
                                </div>
                            </div>

                            
                        </form>
                        <img src="/Image/database.jpg" alt="source_data" style="padding: 10px; width: 50%; height: 500px; position: absolute; left: 48%;">
                        
                    </div>
                </div>

                
                <!--Include Vẽ biểu đồ thống kê-->
                <div id="tk">
                    <?php require_once 'connect.php'  ?>
                    <?php
                        print "";
                        print "<h2>Sale in Week</h2>";

                        $product = "";
                        $Monday = $Tuesday = $Wednesday = $Thursday = $Friday = $Saturday = $Sunday = 0;
                        $proErr = $MonErr = $TuesErr = $WednesErr = $ThursErr = $FriErr = $SaturErr = $SunErr = "";
                        $Err = "You didn't choose the quantity";
                        //Post method just active if each value != 0 or ""
                        if ($_SERVER["REQUEST_METHOD"] == "POST"){
                            if (empty($_POST["tuesday"])){
                                $proErr = $Err;
                            }else{
                                $product = test_input($_POST["product"]);
                            }
                            
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
                                Production: <input type="text" name="product" style="width: 250px;"><span class="error"><?php print $proErr ?></span>
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
                            <h1 style="text-align: center;">Sale Chart</h1>
                            <canvas id="sale_Chart" style="position: relative;width: 99.9%; height:86%; background-color: white; border: 1px solid black;">
                                
                            </canvas>
                            
                        </div>
                        
                    </div>
                    
                    
                    <?php
                        print "<br> <br>";
                        print "<h3>Collect Information:</h3>";
                        print "<p>Product: " .$product. "</p>";
                        print "<p>Total: ".$Monday+$Tuesday+$Wednesday+$Thursday+$Friday+$Saturday+$Sunday."</p><br>";
                    ?>
                </div>
                <div id="lh">
                    <div>
                        <p>
                            <i>Created by <a href="mailto: nasuss15@gmail.com">NguyenNhatTung_20002177</a> & <a href="mailto: ngodanghuy_t65@hus.edu.vn">NgoDangHuy_20002132</a> & <a href="mailto: nguyentrongson_t65@hus.edu.vn">NguyenTrongSon_20002160</a></i>
                        </p>
                        <p>Phone: 0399402431</p>
                        <p>The project used to present in Applied Informatics Subject.</p>
                    </div>
                </div>


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

        function show_Login(){
            document.getElementById('login_screen').style.display = "block";
        }

        function hide_Login(){
            document.getElementById('login_screen').style.display = "none";
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
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
            showDivs(slideIndex += n);
        }

        function currentDiv(n) {
            showDivs(slideIndex = n);
        }

        function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("demo");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";  
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" w3-white", "");
            }
            x[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " w3-white";
        }
    </script>
    <script>
        function logOut() {
            window.location.href = "logout.php";
        }
    </script>
    
</html>