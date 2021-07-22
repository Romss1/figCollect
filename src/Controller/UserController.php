<?php

namespace App\Controller;

use App\Model\User;

class UserController
{
    public function register(): void
    {
        $user = new User();
        var_dump($user);
        include "./../templates/userTemplate.html.php";
    }
}
