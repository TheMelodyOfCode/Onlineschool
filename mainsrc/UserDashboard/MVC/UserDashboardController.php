<?php

namespace App\UserDashboard\MVC;
use App\Users\UserDatabase;

use App\App\AbstractMVC\AbstractController;

class UserDashboardController extends AbstractController {

    public function __construct(UserDatabase $userDatabase)
    {
        $this->userDatabase = $userDatabase;

    }

    public function userDashboard(){

        $userid = $_SESSION["userid"];
        $singleUser = $this->userDatabase->getSingleUser($userid);
        
        /** Wenn im LoginAuth.php $_SESSION["login] true ist dann 
         * lade das Dashboard oder schmeiß den user zurück zur Login Seite.
         * Das Dashboard kann nur erreicht werden wenn man eingelogged ist.
         * HIER kann man dann auch weitere Seiten hinzufügen, die Nur über einen Login
         * erreichbar sein sollen. oder auch noch auf andere Sachen prüfen über die Session variable*/
        if ($_SESSION["login"]) {
            $this->pageload("UserDashboard", "userDashboard", [
                "singleUser" => $singleUser,
            ]);
        } else {
            header("Location: /Login"); 
        }
        
    }

    public function teacherProfile() {    

        $rick = $this->userDatabase->getSingleUser(1);
        $morty = $this->userDatabase->getSingleUser(2);
        $jerry = $this->userDatabase->getSingleUser(3);
        $summer = $this->userDatabase->getSingleUser(4);
        
            $this->pageload("UserDashboard", "teachers", [ 
                # AUF DIE GENAUE SCHREIBWEISE ACHTEN
                "rick" => $rick,
                "morty" => $morty,
                "jerry" => $jerry,
                "summer" => $summer,
    
                ]);
        }



}