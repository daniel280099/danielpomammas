<?php

   $nombre = $_GET['nombre'];
   $valor1 = $_GET['valor1'];
   $valor2 = $_GET['valor2'];
   $valor3 = $_GET['valor3'];

    $mensajePie = "Gracias por su compra";

class productos{

    public $nombre;
    public $valor1;
    public $valor2;
    public $valor3;

public function __construct($nombre,$valor1,$valor2,$valor3){   

    $this -> nombre = $nombre;
    $this -> valor1 = $valor1;
    $this -> valor2 = $valor2;
    $this -> valor3 = $valor3;
}
}

$productos = [
    [
        "precio" => 50,
        "descripcion" => "Procesador AMD Ryzen 7",
        "cantidad" => $valor1,
    ],
    [
        "precio" => 800,
        "descripcion" => "Tarjeta de vídeo",
        "cantidad" => $valor2,
    ],
    [
        "precio" => 3.00,
        "descripcion" => "Tarjeta de vídeo",
        "cantidad" => $valor3,


    ],
];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <link rel="stylesheet" href="./bs3.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Factura</title>
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-xs-10 ">
            <h1>Factura</h1>
        </div>
        <div class="col-xs-2">
            <img class="img img-responsive" src="./parzibyte.jpg" alt="Logotipo">
        </div>
    </div>
    <hr>
    <div class="row">
        
        
 
    <hr>
    <div class="row text-center" style="margin-bottom: 2rem;">
        <div class="col-xs-6">
            <h1 class="h2">Cliente</h1>
            <strong><?php echo $nombre ?></strong>
        </div>
        
    </div>
    <div class="row">
        <div class="col-xs-12">
            <table class="table table-condensed table-bordered table-striped">
                <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Cantidad</th>
                    <th>Precio unitario</th>
                    <th>Total</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $subtotal = 0;
                foreach ($productos as $producto) {
                    $totalProducto = $producto["cantidad"] * $producto["precio"];
                    $subtotal += $totalProducto;
                    ?>
                    <tr>
                        <td><?php echo $producto["descripcion"] ?></td>
                        <td><?php echo number_format($producto["cantidad"], 2) ?></td>
                        <td>$<?php echo number_format($producto["precio"], 2) ?></td>
                        <td>$<?php echo number_format($totalProducto, 2) ?></td>
                    </tr>
                <?php }
               
          
                
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <td colspan="3" class="text-right">Total</td>
                    <td>$<?php echo number_format($subtotal, 3) ?></td>
                </tr>
                
              
                </tfoot>
            </table>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-12 text-center">
            <p class="h5"><?php echo $mensajePie ?></p>
        </div>
    </div>
</div>
</body>
</html>