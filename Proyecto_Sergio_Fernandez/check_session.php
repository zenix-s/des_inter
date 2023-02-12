<?php

function check_session($location, $userText = "", $passText = "", $loc2 = "login.php")
{
    include_once 'includes/user.php';
    include_once 'includes/user_session.php';

    $userSession = new UserSession();
    $user = new User();


    if (isset($_SESSION['user'])) {
        header('location: ' . $location);
    } else if ($userText != "" && $passText != "") {
        $userForm = $userText;
        $passForm = $passText;

        $user = new User();

        if ($user->userExist($userForm, $passForm)) {
            $userSession->setCurrentUser($userForm);
            header('location: ' . $location);
        } else {
            echo "<script>alert('Usuario o contraseña incorrectos')</script>";
        }
    } else {
        header('location: ' . $loc2);
    }
}
