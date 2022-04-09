<?php
session_start();
include_once 'userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $user = $mapper->getUserByID($userId);

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Ushtrimet 5</title>
  <link rel="stylesheet" href="../css/style.css" />
</head>

<body>
  <div class="header">
    <img id="ubtlogo" class="headerPhoto" src="../images/UBT-LOGO.png" alt="UBT Logo" />
    <ul class="headerList">
      <?php
      if (isset($_SESSION["role"]) && $_SESSION['role'] == '1') {
      ?>

        <a href="dashboard.php">
          <li>Dashboard</li>
        </a>
      <?php
      }
      ?>

      <a href="index.php">
        <li>Home</li>
      </a>
      <a href="dashboard.php">
        <li>About us</li>
      </a>
      <a href="">
        <li>Contact</li>
      </a>
      <?php
      if (isset($_SESSION["role"])) {
      ?>
        <a href="logout.php">
          <li>Logout</li>
        </a>
      <?php
      }
      ?>


    </ul>
  </div>
<div class='container'>
    <h1>Modifiko perdoruesin</h1>
    <form class="mainForm" action="../businessLogic/editUser.php" method="get">
        <div class="login forms form-style">
            <input type="text" style="display:none;" value=<?php echo $userId; ?> name="id" />
            <label for="">Name:</label>
            <input type="text" name='username' class="input" placeholder="username..." value=<?php echo $user['userName']; ?> />
            <label for="">Last Name:</label>
            <input type="text" name='lastName' class="input" placeholder="password..." value=<?php echo $user['userLastName']; ?> />
            <input id="submit" type="submit" name='login-btn' class="input submit" value="Edit" />
        </div>
    </form>
</div>

<div class="footer">
  <i>&copy;</i>

  <h3>UBT - Prill 2020</h3>
</div>
</body>

</html>