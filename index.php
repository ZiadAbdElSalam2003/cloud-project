<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Alexandria University</h2>
            </div>
        </div>
        <div class="form">
            <h3>Login here</h3>
            <input type="email" id="email" placeholder="Enter Email here">
            <input type="password" id="password" placeholder="Enter Password here">
            <button class="btnn" onclick="func()">Login</button>
        </div>
    </div>
    <script>
        function func() {
            var email = document.getElementById("email").value;
            var password = document.getElementById("password").value;
            if (email === 'mohamed' && password === 'md10') {
                alert("Login successful!");
                window.location.assign("team.php"); // Changed to index2.php
            } else {
                alert("Invalid login credentials!");
            }
        }
    </script>
</body>
</html>



