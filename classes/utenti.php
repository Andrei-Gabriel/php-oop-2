<?php

    class Utenti {
        public $name;
        public $cognome;
        public $genere;

        public function __construct($_name, $_cognome, $_genere) {
            $this->name = $_name;
            $this->cognome = $_cognome;
            $this->genere = $_genere;
        }
    }

?>