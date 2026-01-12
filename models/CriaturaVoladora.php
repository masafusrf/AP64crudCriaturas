<?php

    class CriaturaVoladora extends Criatura{

        private $envergaduraAlas;

        public function getEnvergadura(){
            return $this->envergaduraAlas;
        }

        public function setEnvergadura($envergaduraAlas){
            $this->envergaduraAlas = $envergaduraAlas;
        }

        public function __construct($id, $name, $species, $danger, $health, $alas){
            $this->envergaduraAlas = $alas;
            parent::__construct($id, $name, $species, $danger, $health);
        }
    }



?>