<?php

namespace App\Model;

class Database
{
    public function connectToDb(): \PDO
    {
        return new \PDO(
            "mysql:host=localhost;dbname=figcollect;charset=UTF8",
            "root",
            "",

        );
    }
}
