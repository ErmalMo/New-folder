<?php 


if(isset($_POST['submit'])){
    $db= mysqli_connect("localhost","root","","webproject");$usCard=$_POST['nrCard'];
    $name = $_POST['userName'];
    $address=$_POST['adresa']; 
    $sql = "INSERT INTO buyproduct (userCreditCard , userName, userAddress) VALUES ('$usCard','$name','$address')";
    mysqli_query($db, $sql);
}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Buy Product</title>
        <link rel="stylesheet" type="text/css" href="style-contact.css">
</head>
    <body>
        <script src="scriptBuy.js"></script>
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
        <form method="post" action="buyProduct.php" class="contact-page ">
                <div class="form" >
                <h1 >Buy product!</h1>
                <h2 >Please insert your info!</h2>
                <input name="nrCard" id="nrcard" type="number" placeholder="Credit number">
                <input name="userName" id="emri" type="text" placeholder="Emri dhe Mbiemri">
                <input name="adresa" id="adresa" type="text" placeholder="Adress">
                <button name="submit" onclick="validation()">Submit</button>                 </form>
            </div>
        </div>
        
    </body>
</html>