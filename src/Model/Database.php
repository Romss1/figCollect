<?php

namespace App\Model;

class Database
{
    public function connectToDb(): \PDO
    {
        return new \PDO(
            "mysql:host=mysql-aurange.alwaysdata.net;dbname=aurange_figcollectiondb;charset=UTF8",
            "aurange",
            "FigCollect123456/",

        );
    }
}
