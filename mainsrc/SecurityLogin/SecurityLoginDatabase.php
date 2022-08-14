<?php

namespace App\SecurityLogin;

use App\App\AbstractMVC\AbstractDatabase;
use App\SecurityLogin\MVC\SecurityLoginModel;
use PDO;

class SecurityLoginDatabase extends AbstractDatabase {

    function getTable()
    {
        return "securitytokens";
    }
    function getModel()
    {
        return SecurityLoginModel::class;
    }
     #Die Funktion wird in LoginAuth aufgerufen
    function newStayin($userid, $identifier, $securitytoken ){
        $table = $this->getTable();
        if (!empty( $this->pdo)){
            $statement =  $this->pdo->prepare("INSERT INTO `$table` (`userid`, `identifier`,`securitytoken`) VALUES (:userid,:identifier, :securitytoken)");
            $statement->execute([
                'userid' => $userid,
                'identifier' => $identifier,
                'securitytoken' => $securitytoken,
            ]);
        }
    }
    #Die Funktion wird in LoginAuth aufgerufen
    function getStayinData($identifier){
        $table = $this->getTable();
        $model = $this->getModel();
        if (!empty( $this->pdo)){
            $user =  $this->pdo->prepare("SELECT * FROM `$table` WHERE `identifier` = :identifier");
            $user->execute([
                'identifier' => $identifier,
            ]);
            $user->setFetchMode(PDO::FETCH_CLASS, $model);
            $userdata = $user->fetch(PDO::FETCH_CLASS);
        }
        return $userdata;
    }
    function updateSecurityToken($securitytoken, $userid){
        $table = $this->getTable();
        if (!empty( $this->pdo)){
            $statement =  $this->pdo->prepare("UPDATE `$table` SET `securitytoken` = :securitytoken WHERE `userid` = :userid");
            $statement->execute([
                'securitytoken' => $securitytoken,
                'userid' => $userid
            ]);
        }
    }
    function deleteStayindata($userid){
        $table = $this->getTable();
        if (!empty( $this->pdo)){
            $statement =  $this->pdo->prepare("DELETE FROM `$table` WHERE `userid` = :userid");
            $statement->execute([
                'userid' => $userid
            ]);
        }
    }

}