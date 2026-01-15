<?php

    class CriaturaController{
        
        private $gestor;

        public function __construct(){
            $this->gestor = new GestorEntidad();
        }

        public function index(){
            $criaturas = $this->gestor->leerCriatura();
            include "views/listar.php";
        }

        public function crear(){
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $id = uniqid();
                $nombre = $_POST['nombre'];
                $especie = $_POST['especie'];
                $peligrosidad = $_POST['peligrosidad'];
                $salud = $_POST['salud'];
                $tipo = $_POST['tipo'];

                if ($tipo === 'marina') {

                    $profundidad = $_POST['profundidad'];

                    $criatura = new CriaturaMarina(
                        $id,
                        $nombre,
                        $especie,
                        $peligrosidad,
                        $salud,
                        $profundidad
                    );

                } elseif ($tipo === 'terrestre') {
                    
                    $terreno = $_POST['terrestre'];

                    $criatura = new CriaturaTerrestre(
                        $id,
                        $nombre,
                        $especie,
                        $peligrosidad,
                        $salud,
                        $terreno
                    );
                }else{
                    echo "Tipo no válido";
                    return;
                }

                $this->gestor->crearCriatura($criatura);

                header("Location: index.php");
                exit;
            }

            include "views/crear.php";
        }

        public function editar(){
            $id = $_GET['id'] ?? null;
            $criatura = $this->gestor->buscarCriatura($id);

            if(!$criatura){
                echo "Esta criatura no existe";
            }

            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                $this->gestor->editarCriatura($id, $_POST['peligrosidad'], $_POST['salud']);

                header("Location: index.php");
                exit;
            }

            include "views/editar.php";
        }

        public function eliminar(){
            $id= $_GET['id'] ?? null;
            $this->gestor->eliminarCriatura($id);
            header("Location: index.php");
            exit;
        }

    }


?>