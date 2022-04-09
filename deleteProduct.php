<?php
include_once 'userMapper.php';
if (isset($_GET['id'])) {
    $userId = $_GET['id'];
    $mapper = new UserMapper();
    $mapper->deleteProduct($userId);
    header("Location:adminDashboard.php");
}
