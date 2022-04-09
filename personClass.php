<?php 

abstract class Person{
    protected $username;
    protected $password;
    protected $role;

    function __construct($username,$password,$role){
        $this->username=$username;
        $this->password=$password;
        $this->role=$role;
    }
    abstract protected function setSession();
}