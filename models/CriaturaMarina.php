<?php

    class CriaturaMarina extends Criatura{

        private $profundidadMax;

        public function getProfundidad(){
            return $this->profundidadMax;
        }

        public function setProfundidad($profundidadMax){
            $this->profundidadMax = $profundidadMax;
        }

        public function __construct($id, $name, $species, $danger, $health, $maxDepth){
            $this->profundidadMax = $maxDepth;
            parent::__construct($id, $name, $species, $danger, $health);
        }
    }


?>