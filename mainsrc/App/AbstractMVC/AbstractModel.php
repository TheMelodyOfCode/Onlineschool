<?php

namespace App\App\AbstractMVC;

/** 
 * Wie der name schon sagt stellt diese Interface die Array-Schreibweise bereit
 * obwohl es ich um ein Objekt handelt */
abstract class AbstractModel implements \ArrayAccess {

    /** Die Variable $offset representiert die Variablen aus dem User- oder Article Model
     *  die den Inhalt der Daten aus der Datenbank wiedergeben
     *  je nach dem welche schreibweise verwendet wird, wird die dementsprechende
     *  function automatisch von PHP getriggert */
    public function offsetExists(mixed $offset): bool
    {
        return isset($this->$offset);
    }

    public function offsetGet($offset)
    {
        return $this->$offset;
    }

    public function offsetSet(mixed $offset, mixed $value): void
    {
        $this->$offset = $value;
    }


    public function offsetUnset(mixed $offset): void
    {
        unset($this->$offset);
    }

    public function getStrlen($value){
        return strlen($value);
    }


}