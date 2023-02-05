<?php

class UserSession{
    public function __construct(){
        session_start();
    }

    public function setCurrentUser($username){
        include_once 'user.php';
        $user = new User();
        $username = $user->getFullName($username);
        $_SESSION['user'] = $username;
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
    }
}

?>