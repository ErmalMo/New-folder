<?php 
include_once 'personClass.php';

class SimpleUser extends Person{
    protected $email;
    public function __construct($username, $password, $role, $email){
        parent::__construct($username,$password,$role);
        $this->email = $email;
    }

    public function setSession(){
        $_SESSION["role"]="0";
        $_SESSION["roleName"]="SimpleUser";
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function getUsername()
    {
        return $this->username;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getRole()
    {
        return $this->role;
    }
}