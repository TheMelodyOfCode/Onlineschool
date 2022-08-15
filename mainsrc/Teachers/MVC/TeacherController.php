<?php

namespace App\Teachers\MVC;

use App\App\AbstractMVC\AbstractController;
use App\Teachers\TeacherDatabase;

/** Der UserController dient dazu Anwendungscode und HTML-Code zu trennen */
class TeacherController extends AbstractController {

    public function __construct(TeacherDatabase $teacherDatabase){
        $this->teacherDatabase = $teacherDatabase;
    }


    public function getAllTeachers() {

        $getTeachers = $this->teacherDatabase->getTeachers();

        $this->pageload("Teachers", "userlink", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "getTeachers" => $getTeachers,
            ]);
    }

    // public function userprofile() {
    // $userid = $_GET["userid"];
    // $singleUser = $this->userDatabase->getSingleUser($userid);
    // $age = 22;

    //     /** Hier werden die 3 Parameter übergeben für die Funktion Pageload aus dem AbstractControler
    //      *  directory, page und das Array mit den variablen */
    //     $this->pageload("Users", "user", [ 
    //         # AUF DIE GENAUE SCHREIBWEISE ACHTEN
    //         "singleUser" => $singleUser,
    //         "age" => $age
    //         ]);
    // }

    public function teacherProfile() {    

    $rick = $this->teacherDatabase->getSingleTeacher(1);
    $morty = $this->teacherDatabase->getSingleTeacher(2);
    $jerry = $this->teacherDatabase->getSingleTeacher(3);
    $summer = $this->teacherDatabase->getSingleTeacher(4);
    
        $this->pageload("Teachers", "teachers", [ 
            # AUF DIE GENAUE SCHREIBWEISE ACHTEN
            "rick" => $rick,
            "morty" => $morty,
            "jerry" => $jerry,
            "summer" => $summer,

            ]);
    }

 
     }



