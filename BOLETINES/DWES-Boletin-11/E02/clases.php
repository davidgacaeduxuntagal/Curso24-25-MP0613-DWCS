<?php 

/*
    OjO: esto no es un script; es un resumen de las ideas principales de lo
         que nos podemos encontrar en una clase de PHP
*/ 

/* ********************************** INTERFACES ************************ */
interface Interfaz1 {
    const constantei1 = 'hola';
    // ....
}

interface Interfaz2 {
    // ....
}

interface Interfaz3 extends Intefaz2 {
    // ....
}

/* ********************************** TRAITS **************************** */
trait nombreTrait1 {
    // ...
}


/* ********************************** CLASES **************************** */

class NombreClaseBase {
    // ......
}


/* readonly | abstract | final */ class NombreClase extends NombreClaseBase 
                                                    implements Interfaz1, Interfaz3
{
    use nombreTrait1, nombreTrait2;

    // -----------------------------------------------------------------------
    //            PARTE STATIC
    // -----------------------------------------------------------------------

    /* public | private | protected */ const constante1   = 'valor';
    /* public | private | protected */ static $varStatic1 = "valor";

     /* abstract */ /* public | private | protected */ /* final */ static function nombreFuncStatic1() {
        // ...
        //  self::constante1
        //  parent::constanteStaticEnClasePadre
        //  self::$varStatic1
        //  return new static;   <---- si se invoca este método crea un objeto y devueve una referencia
     }  



    // -----------------------------------------------------------------------
    //            PROPIEDADES Y MÉTODOS MIEMBRO (DE INSTANCIA)
    // -----------------------------------------------------------------------
    /* public | private | protected */ /* declaración de tipo opcional */ $var1 = 12;  // la inicialización debe ser usando un literal o constante
    /* public | private | protected */ /* readonly */ /* declaración de tipo */ $var2;  // la inicialización debe realizarse posteriormente y una única vez

     /* abstract */ /* public | private | protected */ /* final */ function nombreFunc1() {
        // ...
        //  $this->var1   acceder a una variable miembro
        //  self::constante1    acceder a una constante (que es por defecto static)
        //  parent::constanteStaticEnClasePadre
        //  self::$varStatic1
        //  self::nombreFuncionStatic1()
        //  parent::__construct()
        //  parent::nombreFuncionStaticPadre1(
        //  parent::nombreFuncion1()   permite invocar la versión original, sobreescrita en esta clase
        //  NombreClase::nombreFuncionStatic1()
        //  NombreClase::$varStatic1;
        //  NombreClase::constante1
        //  
        //  new self();  // devuelve un objeto del tipo de la clase donde se aparece esta sentencia (no tiene en cuenta herencia)
        //  new static;  // devuelve un objeto del tipo de la clase del objeto que ejecuta esta sentencia (es decir, tiene en cuenta ligadura dinámica tardía)
        //   : static    // como tipo de retorno indica un objeto del mismo tipo que el del código que ejecuta el return
        //  new parent();

        // Observaciones:
        //  una propiedad y un método pueden tener el mismo nombre (identificador): el contexto de uso determinará su significado
    }

    // -----------------------------------------------------------------------
    //            CONSTRUCTORES
    // -----------------------------------------------------------------------    
    /* public | private | protected */ function __construct() {
        parent::__construct($x, $y);    // Normalmente debemos inicializar la "parte padre" del objeto
                                        // Si usamos un modificador de acceso para un parámetro de constructor
                                        //  se convierte en una propiedad del objeto
        //....
    }

    // -----------------------------------------------------------------------
    //            DESTRUCTORES
    // -----------------------------------------------------------------------    
    /* public | private | protected */ function __destruct() {
       //....
       parent::__destruct();     // al acabar de destruirnos, destruimos a "nuestra parte padre"
    }

    // -----------------------------------------------------------------------
    //            MÉTODOS MÁGICOS
    //  Permiten operar sobre propiedades y métodos creados dinámicamente
    // -----------------------------------------------------------------------    
	public __set  (string $nombre, mixed $valor): void {
        // ...
    }
	
    public __get  (string $nombre): mixed  {
        // ...
    }

	public __isset(string $nombre): bool  {
        // ...
    }

	public __unset(string $nombre): void   {
        // ...
    }


}

// Otras cuestiones:
//   $ejemplo1 = "cadena"::class;   // obtener el nombre plenamente calificado de una clase; en TIEMPO DE COMPILACIÓN
//   $ejemplo2 = funcion()::class;   // obtener el nombre plenamente calificado de una clase; función devuelve un string;
//   $ejemplo3 = new Circulo();   
//   $ejemplo4 = $ejemplo3::class;      // obtener el nombre plenamente calificado de una clase; función devuelve un string; en TIEMPO DE EJECUCIÓN
//   $ejemplo4 = get_class($ejemplo3);  // es lo mismo
//   $ejemplo5 = new $ejemplo1();

//   $nombreClase = "Padre";
//   $ejemplo6 =  $$nombreClase();
//
//   $obj1 = new Circulo();
//   $obj2 = new $obj1;      // creamos un nuevo objeto a partir de inferir la clase de $obj1

