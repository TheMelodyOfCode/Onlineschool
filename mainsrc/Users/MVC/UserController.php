<?php

namespace App\Users\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Users\UserDatabase;

/** Der UserController dient dazu Anwendungscode und HTML-Code zu trennen */
class UserController extends AbstractController {

    public function __construct(UserDatabase $userDatabase){
        $this->userDatabase = $userDatabase;
    }


    public function getAllUsers() {

        $getmembers = $this->userDatabase->getMembers();

        $this->pageload("Users", "userlink", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "getmembers" => $getmembers,
            ]);
    }

    public function userprofile() {
    $userid = $_GET["userid"];
    $singleUser = $this->userDatabase->getSingleUser($userid);
    $age = 22;

        /** Hier werden die 3 Parameter übergeben für die Funktion Pageload aus dem AbstractControler
         *  directory, page und das Array mit den variablen */
        $this->pageload("Users", "user", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "singleUser" => $singleUser,
            "age" => $age
            ]);
    }

    public function memberprofile() {    

    $rick = $this->userDatabase->getSingleUser(1);
    $morty = $this->userDatabase->getSingleUser(2);
    $jerry = $this->userDatabase->getSingleUser(3);
    $summer = $this->userDatabase->getSingleUser(4);
    
        $this->pageload("Users", "members", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "rick" => $rick,
            "morty" => $morty,
            "jerry" => $jerry,
            "summer" => $summer,

            ]);
    }

 
     }



