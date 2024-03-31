<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login PHP</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/login-style.css">
</head>

<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form action="login.php" method="post">
        <div id="back-home">
            <a href="#" class="back-button"><img src="images/button-back.png" alt="Back to Index"></a>
        </div>
        <h3>Login Here</h3>

        <label for="username">Username</label>
        <input type="text" placeholder="Username" id="username" name="username" autocomplete="off">

        <label for="password">Password</label>
        <input type="password" placeholder="Password" id="password" name="password">

        <button type="submit">Log In</button>
    </form>
</body>

</html>