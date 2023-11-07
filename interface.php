<!DOCTYPE html>
<html>
<head>
    <title>Log In</title>
    <style>
        /* CSS để căn giữa khung hình */
        

        .login-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .login-form {
            width: 300px;
            padding: 20px;
            border: 1px solid #ccc;
        }

        .login-form input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            margin-top: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .login-form input[type="submit"]:hover {
            background-color: #45a049;
        }

    </style>
</head>
<body>

<div class="login-container">
    <form class="login-form" action="process_login.php" method="post">
        <h2>Log In</h2>
        Username:<br>
        <input type="text" name="username"><br><br>
        Password:<br>
        <input type="password" name="password"><br><br>
        <input type="submit" value="Log In">
    </form>
</div>


<?php
// Kiểm tra xem thông tin đăng nhập có đúng không
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

}
?>



</body>
</html>
