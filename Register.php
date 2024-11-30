<?php

    require 'connect.inc.php';
    if(isset( $_POST['fname']) && isset( $_POST['lname']) && isset( $_POST['email']) && isset( $_POST['password'])&& isset( $_POST['confirm_password']))
    {
        $firstName =  $_POST['firstName'];
        $lastName =  $_POST['lastName'];
        $email =  $_POST['email'];
        $password =  $_POST['password'];
        $confirmPassword =  $_POST['confirmPassword'];
        
        $query_signup = "INSERT INTO `users` VALUES ( '$fname', '$lname', '$email', '$password')";
        mysqli_query( $con, $query_signup );
        header("Location: chatbot.html");  
    }  
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Registration Page</title>
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

    input[type="text"],
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
    <h2>Register</h2>
    <form action="#" method="post" onsubmit="return validateForm()">
        <input type="text" id="fname" name="fname" placeholder="First Name" required>
        <input type="text" id="lname" name="lname" placeholder="Last Name" required>
        <input type="email" id="email" name="email" placeholder="Email Address" required>
        <input type="password" id="password" name="password" placeholder="Password" required>
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required>
        <span id="password_error" class="error-message"></span>
        <input type="submit" value="Register">
    </form>
</div>

<script>
    function validateForm() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirm_password").value;
        var passwordError = document.getElementById("password_error");

        if (password !== confirmPassword) {
            passwordError.textContent = "Passwords do not match";
            return false;
        } else {
            passwordError.textContent = "";
            return true;
        }
    }
</script>

</body>
</html>
