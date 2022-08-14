<?php

namespace App\Users\MVC;

use App\App\AbstractMVC\AbstractModel;

/**
 * Durch das UserModel - und  das der fetch in der Userdatabase auf Objekt umgeschrieben wurde 
 * $members->setFetchMode(PDO::FETCH_CLASS, UserModel::class);
 * $memberdata = $members->fetchAll(PDO::FETCH_CLASS);
 * können wir die Objekt-Orientierte schreibweise benutzen und 
 * zusätzlich durch das Abstract Model die Array-schreibweise 
 * 
 * Die Variablen sind die Spalten der Tabelle in der Datenbank*/    
class UserModel extends AbstractModel {
    public $userid;
    public $username;
    public $mail;
    public $password;
    public $bio;

    /**
     * Hier können nun auch funktionen definiert werden um die Variablen
     * bzw den Inhalt aus der Datenbank anders anzeigen lassen zu können zum Beispiel */
    public function getStrlen($value)
    {
        return ($value);
    }

}