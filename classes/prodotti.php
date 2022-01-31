<?php

    class Prodotto {
        public $nome;
        public $prezzo;

        public function __construct($_nome, $_prezzo) {
            $this->nome = $_nome;
            $this->prezzo = $_prezzo;
        }
    }

?>