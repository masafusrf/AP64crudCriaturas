<?php

    class CriaturaTerrestre extends Criatura{
        
        private $terreno;

        public function getTerreno(){
            return $this->terreno;
        }

        public function setTerreno($tipoTerreno){
            $this->terreno = $tipoTerreno;
        }

        public function __construct($id, $name, $species, $danger, $health, $tipoTerreno){
            $this->terreno = $tipoTerreno;
            parent::__construct($id, $name, $species, $danger, $health);
        }
    }

?>