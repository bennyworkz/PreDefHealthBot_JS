<?php
    require 'connect.inc.php';
    if(isset( $_POST['email']) && isset( $_POST['password']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        $query = "SELECT * FROM users WHERE email ='$email' AND password='$password' ";
        $result = mysqli_query($con,$query);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if(mysqli_num_rows($result) != NULL)
        {
            header("Location: chatbot.html");
        }
        else
        {
            echo "<h3 style ='position: absolute;top: 0%;' ><font color=\"red\">* Userid and password didn't match up.</font></h3>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background: linear-gradient(to right, #8e9eab, #eef2f3);
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        width: 350px;
        background-color: #fff;
        padding: 40px;
        border-radius: 20px;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
    }

    h2 {
        text-align: center;
        margin-bottom: 30px;
        color: #333;
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
    }

    input[type="submit"] {
        background-color: #4CAF50;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }

    .error-message {
        color: red;
        font-size: 12px;
    }

    @media (max-width: 600px) {
        .container {
            width: 90%;
        }
    }
</style>
</head>
<body>

<div class="container">
    <h2>Login</h2>
    <form action="#" method="post">
        <input type="email" id="email" name="email" placeholder="Email Address" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="submit" value="Login">
    </form>
</div>

</body>
</html>
