<?php

namespace App\Users;

use App\App\AbstractMVC\AbstractDatabase;
use App\Users\MVC\UserModel;
use PDO;


class UserDatabase extends AbstractDatabase {

    public function getTable() {
        return "users";
    }

    public function getModel(){
        return UserModel::class;
    }
    
    function getMembers(){ 
    
        $table = $this->getTable();
        $model = $this->getModel();

        if (!empty($this->pdo)){
            $members = $this->pdo->prepare("SELECT * FROM $table");
            $members->execute();
            $members->setFetchMode(PDO::FETCH_CLASS, $model);
            $memberdata = $members->fetchAll(PDO::FETCH_CLASS);
            }
            return $memberdata;
    }

    function getSingleUser($userID){ 

        $table = $this->getTable();
        $model = $this->getModel();
    
        if (!empty($this->pdo)){
            $singleUser = $this->pdo->prepare("SELECT * FROM $table WHERE `userid` = :userid");
            # das Statement muss ausgeführt werden durch execute und dem platzhalter :userid die userid übergeben werden
            $singleUser->execute([
                'userid' => $userID
            ]);
            $singleUser->setFetchMode(PDO::FETCH_CLASS, $model);
            $usersdata = $singleUser->fetch(PDO::FETCH_CLASS);
       }
       return $usersdata;
       
    }

function newUser($firstname,$lastname,$username,$email,$password, $membership, $bio){ 

    $table = $this->getTable();
    if (!empty($this->pdo)){
        #Hier ist wichtig das die Platzhalter in der richtigen Reihenfolge sind
        $statement =  $this->pdo->prepare("INSERT INTO `$table` (`firstname`, `lastname`,`username`, `mail`, `password`, `membership`, `bio`) VALUES (:firstname, :lastname,:username, :mail, :password, :membership, :bio)");
        $statement->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'mail' => $email,
            'password' => $password,
            'membership' => $membership,
            'bio' => $bio,
        ]);
    }
}


function deletUser($username){ 

    // $username = "BlupBla";
    $table = $this->getTable();
    if (!empty($this->pdo)){
       $statement = $this->pdo->prepare("DELETE FROM $table WHERE username = :username");
       $statement->execute([
        'username' => $username
       ]);
    }
}


function updateUser(){ 
    $table = $this->getTable();
    if (!empty($this->pdo)){
       $statement = $this->pdo->prepare("UPDATE $table SET password = :password WHERE `userid` = :userid ");
       $statement->execute([
        #Im Normalfall werden hier Variablen benutzt
        'password' => "12345Updated",
        'userid' => 5
       ]);
       #Hier wird kein return benötigt, weil nichts ausgegeben werden muss
    }
}



}