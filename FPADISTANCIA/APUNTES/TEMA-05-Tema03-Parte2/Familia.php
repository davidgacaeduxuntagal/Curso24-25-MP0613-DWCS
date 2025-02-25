<?php
    class Familia extends Conexion {
        private $cod;
        private $nombre;

        public function __construct() {
            parent::__construct();
        }

        public function recuperarFamilias() {
            $consulta="select * from familias order by nombre";
            $stmt=$this->conexion->prepare($consulta);

            try {
                $stmt->execute();
            } catch (PDOException $ex) {
                die("Error al recuperar: ".$ex->getMessage());
            }

            return $stmt;
        }
    }