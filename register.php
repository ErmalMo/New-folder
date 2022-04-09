<?php 
include_once 'adminClass.php';
include_once 'simpleUserClass.php';
require_once 'userMapper.php';
session_start();


if (isset($_POST['login'])) {
    $login = new LoginForm($_POST);
    $login->checkData();
} elseif (isset($_POST['submit'])) {
    $register = new DataUser($_POST);
    $register->insertData();
} else {
    header("Location:loginRegistration.php");
}
class LoginForm{
    private $username = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->password = $formData['password'];
    }

    public function checkData()
    {
        if ($this->correctData($this->username, $this->password)){
            
            header("Location:index.php");
        } else if ($this->wrongData($this->username, $this->password))  {
             
            header('Location:login.php');
        } else {
            header("Location:login.php");
        }
    }

    private function wrongData($username, $password)
    {
        if (empty($username) || empty($password)) {
            return true;
        }
        return false;
    }

    private function correctData($username, $password)
    {
        $mapper = new UserMapper();
        $user = $mapper->getUserByUsername($username);
        if($user == null || count($user) == 0) {
            return false;
        }
            else if (password_verify($password, $user['password'])) {
            if ($user['role'] == 1) {
                $obj = new Admin($user['id'], $user['username'], $user['password'], $user['role']);
                $obj->setSession();
            } else {
                $obj = new SimpleUser($user['id'], $user['username'], $user['password'], $user['role'], "");
                $obj->setSession();
            }
            return true;
        } else {
            return false;
        }
    }
}
class DataUser{
    private $username = "";
    private $email = "";
    private $password = "";

    public function __construct($formData)
    {
        $this->username = $formData['username'];
        $this->email = $formData['email'];
        $this->password = $formData['password'];
    }

    public function insertData()
    {
        //prolly a bug here userEmail
        $user = new SimpleUser($this->username,$this->password, 0, $this->email);

        $mapper = new UserMapper();
        $mapper->insertUser($user);
        header("Location:index.php");
    }
}