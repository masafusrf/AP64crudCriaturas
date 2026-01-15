<?php

    class GestorEntidad{

        public function __construct(){
            if(!isset($_SESSION['criaturas'])){
                $_SESSION['criaturas'] = [];
            }
        }

        public function crearCriatura($criatura){
            $_SESSION['criaturas'][] = $criatura;
        }

        public function leerCriatura(){
            return $_SESSION['criaturas'];
        }

        public function buscarCriatura($id){
            foreach($_SESSION['criaturas'] as $criatura){
                if ($criatura->getId() == $id) {
                    return $criatura;
                }
            }

            return null;

        }

        public function editarCriatura($id, $peligrosidad, $salud){
            $criatura = $this->buscarCriatura($id);

            if ($criatura !== null) {
                $criatura->setPeligrosidad($peligrosidad);
                $criatura->setSalud($salud);
                return true;
            }

            return false;
        }

        public function eliminarCriatura($id){

            foreach ($_SESSION['criaturas'] as $i => $criatura) {
                if ($criatura->getId() == $id) {
                    unset($_SESSION['criaturas'][$i]);
                    $_SESSION['criaturas'] = array_values($_SESSION['criaturas']);

                    return true;
                }
            }

            return false;
            
        }
    }

?>