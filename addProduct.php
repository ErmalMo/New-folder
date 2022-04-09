<?php 

    if(isset($_POST['upload'])){

        $targert="product/".basename($_FILES['image']['name']);

        $db= mysqli_connect("localhost","root","","webproject");

        $image = $_FILES['image']['name'];
        $prName=$_POST['productName'];
        $prPrice=$_POST['productPrice'];
        $text = $_POST['text']; 

        $sql = "INSERT INTO product (prodPic, prodName , prodPrice ,prodDescription) VALUES ('$image', '$prName' , '$prPrice' , '$text')";
        mysqli_query($db, $sql);
    }


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="pAddStyle.css" />
    <title>Add Product</title>
</head>
<body>
<div class="header" style="height:150px">
<img src="logo.png" style="margin-left:35%; margin-top:10px;">
</div>
    <h1 style="margin-left:25%;">Add product to database</h1>
    <div id=content >
        <form method="post" action="addProduct.php" enctype="multipart/form-data">
            <input type="hidden" name="size" value="1000000">
            <div>
                <input type="file" name="image" >
            </div>
            <div>
                <input type="text" name="productName" placeholder="Name">
            </div>
            <div>
            <input type="number" name="productPrice" value="Price of Product">
            </div>
            <div>
            <textarea name="text" cols="30" rows="4" placeholder="productDescription"></textarea>
            </div>
            <div>
            <input type="submit" name="upload" value="Register to Database">
            </div>
        </form>
    </div>
    <div class="footer" style="height:150px">
<img src="logo.png" style="margin-left:35%; margin-top:10px;">
</div>
</body>
</html>