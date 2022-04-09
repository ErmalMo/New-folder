<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Elise</title>
        <link rel="stylesheet" type="text/css" href="styleLogReg.css">
    </head>
    <body>
    <script src="scriptLoginReg.js"></script>
    <header>
        <div class="main">
            <div class="logo">
                <img src="logo.png">
            </div>
                <div class="links">
                <ul>
                    <li class="active"> <a >Register</a></li>
                    <li ><a href="contact.php"> Contact</a></li>      
                    <li><a href="index.php">Home</a></li> 
                </ul>
            </div>
        </div>
        <form class="form-register" action="register.php" method="post">
        <div class="form">
        <input id="usernami" type="text" name="username" value="" required placeholder="Username"></p>
        <input id="emaili" type="text" name="email" value="" required placeholder="Email"></p>
        <input id="passwordi" type="password" name="password" value="" required placeholder="Password"></p>
        <input id="confirm-pass" type="password" name="password_1" value="" required placeholder="Confirm password"></p>
        <a href="login.php"><h3>Already a member? Login</h3></a>
        <input onclick="validation()" class="button" type="submit" name="submit" value="Submit" placeholder="Submit"> 
        </form>
    </div>
</body>
</html>