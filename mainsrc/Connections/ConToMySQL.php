<?php

namespace  App\Connections;

use PDO;

class ConToMySQL {

    public function conToMySQL1(){

        $pdo = new PDO('mysql:host=localhost; dbname=onlineschool; charset=utf8','testus','SchnickSchnack!');
        #hier wird von emulierten statements auf echte gewechselt. In neueren Projekten besser.
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;

    }
    public function conToMySQL2(){

        $pdo = new PDO('mysql:host=localhost; dbname=onlineschool; charset=utf8','testus','SchnickSchnack!');
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        return $pdo;

    }
}