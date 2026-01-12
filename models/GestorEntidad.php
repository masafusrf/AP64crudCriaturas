<?php

    class GestorEntidad{

        public function __construct(){
            if(!isset($_SESSION['criaturas'])){
                $_SESSION['criaturas'] = [];
            }
        }

        public function crearCriatura(){

        }

        public function leerCriatura(){

        }

        public function buscarCriatura(){

        }

        public function editarCriatura(){

        }

        public function eliminarCriatura(){
            
        }
    }

?>