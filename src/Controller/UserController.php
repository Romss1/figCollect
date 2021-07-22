<?php

namespace App\Controller;

use App\Model\User;
use App\Model\Database;
use PDOException;

class UserController
{
    public function register()
    {

        $user = new User();

        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $email = filter_input(INPUT_POST, "email");
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_FULL_SPECIAL_CHARS);


        if (!empty($username) && !empty($email) && !empty($password)) {

            $user->setUsername($username);
            $user->setEmail($email);
            $user->setPassword($password);

            $db = new Database();
            $dbh = $db->connectToDb();
            $sth = $dbh->prepare("INSERT INTO `user` (`username`, `email`, `password`, `type`) VALUES(:username, :email, :password, :type)");
            try {

                $sth->execute([
                    ":username" => $user->getUsername(),
                    ":email" => $user->getEmail(),
                    ":password" => $user->getPassword(),
                    ":type" => "user"
                ]);
            } catch (PDOException $e) {
                var_dump($e);
            }
            header('Location: /user');
            exit;
        } else {
        }
        include "./../templates/userTemplate.html.php";
    }
}
