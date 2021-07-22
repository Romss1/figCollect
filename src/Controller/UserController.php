<?php

namespace App\Controller;

use App\Model\User;

class UserController
{
    public function register(): Bool
    {
        $user = new User();
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "email", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        include "./../templates/userTemplate.html.php";
        if (!empty($username) &&  !empty($email) && !empty($password)) {

            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPassword($password);
            return true;
        } else {
            header("Location: /user");
            return false;
        }
    }
}
