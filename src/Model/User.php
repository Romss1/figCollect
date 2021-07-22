<?php

namespace App\Model;

use App\Model;

class User
{
    private string $username;
    private string $email;
    private string $password;

    public function setUsername()
    {
        return $this->username;
    }
    public function setEmail()
    {
        return $this->email;
    }
    public function setPassword()
    {
        return $this->password;
    }
    public function getUsername($username)
    {
        $this->username = $username;
    }
    public function getEmail($email)
    {
        $this->email = $email;
    }
    public function getPassword($password)
    {
        $this->password = $password;
    }
}
