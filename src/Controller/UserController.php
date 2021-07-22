<?php

namespace App\Controller;

use App\Model\User;

class UserController
{
    public function register(): void
    {
        $user = new User();
        $username = (string) filter_input(INPUT_POST, "username");
        $user->setUsername($username);

        include "./../templates/userTemplate.html.php";
    }
}
