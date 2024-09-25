<?php
    // Estados: este array no lo utilizamos; solo está con propósito de documentar
    $nombresEstados = [ "CargaInicial",                     // S0
                        "CargaInicialTotalInvalido",        // S1
                        "CargaTermino",                     // S2
                        "CargaTerminoInvalido",             // S3
                        "ImprimirMedia",                    // S4
                        ];
    
    // Eventos: este array no lo utilizamos; solo está con propósito de documentar
    $nombresEventos = ["Enviar",                            // EE0
                       "Borrar",                            // EE1
                    ];

    // Tabla de eventos-estados ampliada:
    $automata = [[1,1], [2, 1], [3, 1], [4, 1]];

    // Las trancisiones tienen la información necesaria para hacer funcionar todo:
    //  Cada transicion se compone de uno o más arrays con el formato siguiente:
    //   [ 'string comprobación booleana', estadoSiguiente, array_de_acciones_especificas, array_de_eventos_salientes]
    $transiciones = [ null, 
        [  // Transición 1
            ['return true;', 1, [], ['include "f1.php";'] ]
        ], 
        [  // Transición 2
            ['return ($total === "NOVALIDO" || !($total > 0)); ', 1, [], ['include "f2.php";'] ],
            ['return ($total !== "NOVALIDO" && ($total > 0));'  , 2, ['$contador = 1;' , '$sumatorio = 0;'], ['include "f3.php";']  ]
        ],
        [  // Transición 3
            ['return ( ($termino  !== "NOVALIDO") && ($contador < $total) ); ', 2, ['$contador++;' , '$sumatorio += $termino;'], ['include "f3.php";']],
            ['return ( ($termino  !== "NOVALIDO") && !($contador < $total) ); ', 3, ['$sumatorio += $termino;', '$media = $sumatorio / $total;'], ['include "f5.php";']],
            ['return (  $termino === "NOVALIDO"  ); ', 2, [], ['include "f4.php";']],
        ],
        [  // Transición 4
            ['return ( true ); ', 3, ['$media = $sumatorio / $total;'], ['include "f5.php";']],
        ]
    ]                 
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DWES-PHP-B03-01b</title>
</head>
<body style="font-family: monospace">

<form action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="get">
<?php
    include "sanitizar.php";

    // Procesamos las entradas presentes y futuras
    $total     = !isset($_GET['total'])     ? "NOVALIDO": formatoEnteroValido($_GET['total']);
    $termino   = !isset($_GET['termino'])   ? "NOVALIDO": formatoEnteroValido($_GET['termino']);
    $contador  = !isset($_GET['contador'])  ? "NOVALIDO": formatoEnteroValido($_GET['contador']);
    $sumatorio = !isset($_GET['sumatorio']) ? "NOVALIDO": formatoEnteroValido($_GET['sumatorio']);
    $estado    = !isset($_GET['estado'])    ? 0 : formatoEnteroValido($_GET['estado']);             // Comenzamos en estado ST0 = 0
    
    if ( $estado === "NOVALIDO" || $estado < 0 || $estado > 4 ) {
        throw new Exception("ERROR: han manipulado el HTML en cliente");
    } else {
        $estado = intval($estado);
    }

    // Obtenemos la siguiente transición consultando la tabla de transiciones
    $listaTransiciones = $transiciones[$automata[$estado][0]];

    // Procesamos la transición:
    foreach($listaTransiciones as $transicion) {
        if ( eval($transicion[0]) ) {
            $estado = $transicion[1];
            foreach($transicion[2] as $accion) {
                eval($accion);
            }
            foreach($transicion[3] as $eventoSalida) {
                eval($eventoSalida);
            }
            break;  // una vez encontrada una condición que se cumple, ya no procesamos más 
        }           // (recordemos que las condiciones son mútuamente excluyentes)
    }

?>
  
</body>
</html>