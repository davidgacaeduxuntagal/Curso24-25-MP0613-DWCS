<?php
    if(!isset($_POST['id'])) {
        //si no me llega el código del producto a borrar
        //nos vamos a listado.php
        header('Location:listado.php');
    }
    
    $cod = $_POST['id'];
    require_once 'conexion.php';
    $delete="delete from productos where id=:i";
    $stmt=$conProyecto->prepare($delete);
    
    try {
        $stmt->execute([':i'=>$cod]);
    } catch(PDOException $ex) {
        $stmt=null;
        $conProyecto=null;
        echo "ocurrio un error al borrar el producto, mensaje: ".$ex->getMessage();
        echo " <a href='listado.php' style='text-decoration:none;'><button>Volver</button></a>";
    }

    $stmt=null;
    $conProyecto=null;

    echo "<p style='font-weight: bold'>Producto de Código: $cod Borrado  correctamente.";
    echo "<a href='listado.php' style='text-decoration:none;'><button>Volver</button></a></p>";