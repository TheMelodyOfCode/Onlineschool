<?php

namespace App\Teachers;

use App\App\AbstractMVC\AbstractDatabase;
use App\Teachers\MVC\TeacherModel;
use PDO;


class TeacherDatabase extends AbstractDatabase {

    public function getTable() {
        return "teachers";
    }

    public function getModel(){
        return TeacherModel::class;
    }
    
    function getTeacher(){ 
    
        $table = $this->getTable();
        $model = $this->getModel();

        if (!empty($this->pdo)){
            $teachers = $this->pdo->prepare("SELECT * FROM $table");
            $teachers->execute();
            $teachers->setFetchMode(PDO::FETCH_CLASS, $model);
            $teachersData = $teachers->fetchAll(PDO::FETCH_CLASS);
            }
            return $teachersData;
    }

    function getSingleTeacher($userID){ 

        $table = $this->getTable();
        $model = $this->getModel();
    
        if (!empty($this->pdo)){
            $singleTeacher = $this->pdo->prepare("SELECT * FROM $table WHERE `userid` = :userid");
            # das Statement muss ausgeführt werden durch execute und dem platzhalter :userid die userid übergeben werden
            $singleTeacher->execute([
                'userid' => $userID
            ]);
            $singleTeacher->setFetchMode(PDO::FETCH_CLASS, $model);
            $teachersData = $singleTeacher->fetch(PDO::FETCH_CLASS);
       }
       return $teachersData;
       
    }

function newTeacher($firstname,$lastname,$username,$email,$password,$bio){ 

    $table = $this->getTable();
    if (!empty($this->pdo)){
        #Hier ist wichtig das die Platzhalter in der richtigen Reihenfolge sind
        $statement =  $this->pdo->prepare("INSERT INTO `$table` (`firstname`, `lastname`,`username`, `mail`, `password`, `bio`) VALUES (:firstname, :lastname,:username, :mail, :password, :bio)");
        $statement->execute([
            'firstname' => $firstname,
            'lastname' => $lastname,
            'username' => $username,
            'mail' => $email,
            'password' => $password,
            'bio' => $bio,
        ]);
    }
}


function deletTeacher($username){ 

    // $username = "BlupBla";
    $table = $this->getTable();
    if (!empty($this->pdo)){
       $statement = $this->pdo->prepare("DELETE FROM $table WHERE username = :username");
       $statement->execute([
        'username' => $username
       ]);
    }
}


function updateTeacher(){ 
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