<?php

include_once 'userMapper.php';
include_once 'simpleUserClass.php';
//dll
if (isset($_GET['username']) ) {
    $userId = $_GET['id'];
    $username = $_GET['username'];
    $useremail = $_GET['email'];
    $simpleUser = new SimpleUser($username, "", 1, $useremail);
    $mapper = new UserMapper();
    $mapper->edit($simpleUser, $userId);
    header("Location:contact.php");
}