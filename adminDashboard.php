<?php
session_start();
include_once 'userMapper.php';
if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
    $mapper =  new UserMapper();
    $userList = $mapper->getAllUsers();
    $productList = $mapper->getAllProducts();
    $userBuyers = $mapper->getAllBuyers();
    $userContacts = $mapper->getAllContact();
} else {
    header("Location:login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Elise</title>
  <link rel="stylesheet" href="styleDashboard.css" />
</head>

<body>
  <div class="header">
    <img id="myLogo" class="logo" src="logo.png" alt="logo" />
    <ul class="headerList">
          <li clas="active"><a href="#.php"> Dashboard</a></li>
          <li ><a href="contact.php"> Contact</a></li>    
          <li> <a href="aboutUs.php">About Us</a></li>
          <li><a href="index.php">Home</a></li>
      <?php
      if (isset($_SESSION["role"])) {
      ?>
          <li><a href="logout.php">Logout</a></li>    
      <?php
      }
      ?>


    </ul>
  </div>
<div>
    <h1 class="txt">Elise Dashboard</h1>
    <div>
      <button><a href="addProduct.php">Add Product</a></button>
      <table>
          <br><br>
            <thead>
              <tr>
                <td><h1>Buyers List</h1></td>
              </tr>
                <tr>
                    <td>Credit Card</td>
                    <td>Name</td>
                    <td>Address</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userBuyers as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['userCreditCard']; ?></td>
                        <td><?php echo $user['userName']; ?></td>
                        <td><?php echo $user['userAddress']; ?></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table>  
      <table>
      <table>
          <br><br>
            <thead>
              <tr>
                <td><h1>Contacts List</h1></td>
              </tr>
                <tr>
                    <td>Email</td>
                    <td>Message</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userContacts as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['userEmail']; ?></td>
                        <td><?php echo $user['userMessage']; ?></td>
                        
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table>
          <br><br>
            <thead>
              <tr>
                <td><h1>USER LIST</h1></td>
              </tr>
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Password</td>
                    <td>Delete User</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($userList as $user) {
                ?>
                    <tr>
                        <td><?php echo $user['username']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['password']; ?></td>
                        <td><a href=<?php echo "deleteUser.php?id=" . $user['id'];?>>DELETE</td>        
                                    
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table>
          <br><br>
            <thead>
              <tr>
                <td><h1>PRODUCT LIST</h1></td>
              </tr>
                <tr>
                    <td>PRODUCT picture</td>
                    <td>PRODUCT  name</td>
                    <td>PRODUCT  description</td>
                    <td>PRODUCT  price</td>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($productList as $product) {
                ?>
                    <tr>
                        <td><?php echo $product['prodPic']; ?></td>
                        <td><?php echo $product['prodName']; ?></td>
                        <td><?php echo $product['prodDescription']; ?></td>
						            <td><?php echo $product['prodPrice']; ?></td>
                        <td><a href=<?php echo "deleteProduct.php?id=" . $product['id'];?>>DELETE</td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
<div class="footer" style="height:150px">
<img src="logo.png" style="margin-left:35%; margin-top:10px;">
</div>
</body>

</html>