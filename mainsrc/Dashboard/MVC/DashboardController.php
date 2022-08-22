<?php

namespace App\Dashboard\MVC;
use App\Users\UserDatabase;

use App\App\AbstractMVC\AbstractController;

class DashboardController extends AbstractController {

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
                $this->pageload("Dashboard", "userDashboard", [
                    "singleUser" => $singleUser,
                ]);
            }   else {
                header("Location: /Login"); 
            }
           
    }

    function checkMembership(){
        $userid = $_SESSION["userid"];
        $singleUser = $this->userDatabase->getSingleUser($userid);
        
        if ($_SESSION["membership"] === "pro" OR $_SESSION["membership"] === "teacher") {

            if ($_SESSION["login"]) {
                $this->pageload("Dashboard", "learningAreaPro", [
                    "singleUser" => $singleUser,
                    ]);    
            }   else {
                header("Location: /Login"); 
            }

        }
        if ($_SESSION["membership"] === "enterprise") {

            if ($_SESSION["login"]) {
                $this->pageload("Dashboard", "enterpriseLearning", [
                    "singleUser" => $singleUser,
                    ]);
            }   else {
                header("Location: /Login"); 
            }



        } else {
            $this->pageload("Dashboard", "freeLearning", [
                "singleUser" => $singleUser,
                ]);
        }
        
    }

    public function teacherProfile() {    

        $rick = $this->userDatabase->getSingleUser(1);
        $morty = $this->userDatabase->getSingleUser(2);
        $jerry = $this->userDatabase->getSingleUser(3);
        $summer = $this->userDatabase->getSingleUser(4);
        
        if ($_SESSION["login"]) {
            $this->pageload("Dashboard", "teachers", [ 
                # AUF DIE GENAUE SCHREIBWEISE ACHTEN
                "rick" => $rick,
                "morty" => $morty,
                "jerry" => $jerry,
                "summer" => $summer,
    
                ]);
        }   else {
            header("Location: /Login"); 
        }

        }



}