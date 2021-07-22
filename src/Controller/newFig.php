<?php

namespace App\Controller;

use App\Model\Figurine;

function  newFigurine()
{

    $image = filter_input(INPUT_POST, "favorites");



    $link = [

        'href' => $url,
        'text' => "",
        'favicon' => $favicon = "",
        'preview' => $preview = "",
        'commentList' => "yeyeye",
    ];


    /*if (!array_key_exists("user", $_SESSION)) {
        header('Location: /signin');
        exit();
    };*/

    if (null != $url) {
        if ($urlverif != $url) {
            $urlerror = 'url non valide';
        } else {
            //success
            $code = file_get_contents($url);
            var_dump("success");
            $dbh = getConnexion();
            $title = explode("<title>", $code);
            $explo = explode("/", $url);
            $fav = $explo[0] . "//" . $explo[2] . "/favicon.ico";
            $host = $explo[2];

            if("www.youtube.com" === $host){
                $videoId = explode("&",explode("=",$url)[1])[0];
                $link["preview"] = $videoId;
            }


            $sth = $dbh->prepare("INSERT INTO `favorite` (`href`,`text`,`favicon`,`preview`,`commentList`) 
                                VALUES (:href,:text,:favicon,:preview,:commentList)");

            $sth->execute([
                ":href" => $link["href"],
                ":text" => explode("</title>", $title[1])[0],
                ":favicon" => $fav,
                ":preview" => $link["preview"],
                ":commentList" => $link["commentList"],
            ]);


            $sth = $dbh->prepare("INSERT INTO `user_favorite` (`user_id`,`favorite_id`) 
                                VALUES (:user_id,:favorite_id)");

            $sth->execute([
                ":user_id" => $_SESSION["user"]["id"],
                ":favorite_id" => $dbh->lastInsertId(),
            ]);

            header('Location: /');
            exit();

        }

    }

    $favid = filter_input(INPUT_GET, "favorite");

    if ($_SESSION!= null) {

        $dbh = getConnexion();
        $sth = $dbh->prepare(" 
                SELECT favorite.id, favorite.href, favorite.text ,favorite.favicon ,favorite.preview ,favorite.commentList 
                FROM user_favorite
                JOIN favorite
                ON user_favorite.favorite_id = favorite.id
                WHERE user_favorite.user_id = :user_id");

        $sth->execute([
            ":user_id" => $_SESSION["user"]['id'],
        ]);


        $favorite = $sth->fetchAll(PDO::FETCH_ASSOC);


    }


    if (null != $favid) {


        $sth = $dbh->prepare("DELETE FROM user_favorite 
                                    WHERE user_id = :id  AND user_favorite.favorite_id = :favid;
                                    DELETE FROM favorite
                                    WHERE favorite.id = :ffavid ");
        $sth->execute(
            [
                ":id" => $_SESSION["user"]["id"],
                ":favid" => $favid,
                ":ffavid" => $favid
            ]
        );

        header('Location: /');
        exit();
    }


}

