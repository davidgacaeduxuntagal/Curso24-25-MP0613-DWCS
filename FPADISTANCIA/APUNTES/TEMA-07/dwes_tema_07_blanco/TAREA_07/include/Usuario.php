<?php

// require 'Conexion.php';
class Usuario extends Conexion
{
    private $usuario;
    private $pass;

    public function __construct() {
        parent::__construct();
    }

    public function setUsuario($u) {
        $this->usuario = $u;
    }

    public function setPass($p)  {
        $this->pass = $p;
    }

    public function create() {
        $i = "insert into usuarios(usuario, pass) select :u, sha2(:p, '256')";
        $stmt = Conexion::$conexion->prepare($i);

        try {
            $stmt->execute(['u' => $this->usuario, 'p' => $this->pass]);
        } catch (PDOException $ex) {
            die($ex->getMessage());
        }
    }

    public function isValido($u, $p)  {
        $pass1 = hash('sha256', $p);
        $consulta = "select * from usuarios where usuario=:u AND pass=:p";
        $stmt = Conexion::$conexion->prepare($consulta);
        try {
            $stmt->execute([
                ':u' => $u,
                ':p' => $pass1
            ]);
        } catch (PDOException $ex) {
            die("Error al consultar usuario: " . $ex->getMessage());
        }
        $filas = $stmt->rowCount();
        if ($filas == 0) return false;
        return true;
    }

    public function existe($u)  {
        $c = "select * from usuarios where usuario=:u";
        $stmt = Conexion::$conexion->prepare($c);
        $stmt->execute([':u' => $u]);
        $filas = $stmt->rowCount();
        if ($filas == 0) return false;
        return true;
    }
}
