<?php 

if(isset($_POST['submit'])){
    $db= mysqli_connect("localhost","root","","webproject");

    $usEmail=$_POST['email'];
    $text = $_POST['text']; 

    $sql = "INSERT INTO contact (userEmail , userMessage) VALUES ('$usEmail','$text')";
    mysqli_query($db, $sql);
    }

?>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Elise</title>
        <link rel="stylesheet" type="text/css" href="style-contact.css">
    </head>
    <body>
    <script src="validateContact.js"></script>
    <header>
        <div class="main">
            <div class="logo">
                <img src="logo.png">
                
            </div>
            <div class="links">
                    <ul>
                        <li class="active"><a > Contact</a></li>    
                        <li> <a href="loginRegistration.php">Register</a></li>
                        <li><a href="index.php">Home</a></li>
                        
                    </ul>
                </div> 
        </div> 
            <form method="post" action="contact.php" class="contact-page ">
                <div class="form" >

                <h2 style=color: white;>Insert your info!</h2>
                <input name="email" id="emaili" type="text" placeholder="EMAIL" required >
                <textarea name="text" cols="30" rows="4" placeholder="message"></textarea>
                <button name="submit" onclick="validation()">Submit</button>
                </div> 
            </form>
    </header>

    </body>
</html>