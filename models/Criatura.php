<?php

    class Criatura{
        
        private $id;
        private $nombre;
        private $especie;
        private $peligrosidad;
        private $salud;

        public function __construct($id, $name, $species, $danger, $health){
            $this->id = $id;
            $this->nombre = $name;
            $this->especie = $species;
            $this->peligrosidad = $danger;
            $this->salud = $health;
        }

        public function getId(){
            return $this->id;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function setNombre($nombre){
            $this->nombre = $nombre;
        }

        public function getEspecie(){
            return $this->especie;
        }

        public function setEspecie($especie){
            $this->especie = $especie;
        }

        public function getPeligrosidad(){
            return $this->peligrosidad;
        }

        public function setPeligrosidad($peligrosidad){
            $this->peligrosidad = $peligrosidad;
        }

        public function getSalud(){
            return $this->salud;
        }

        public function setSalud($salud){
            $this->salud = $salud;
        }
    }


?>