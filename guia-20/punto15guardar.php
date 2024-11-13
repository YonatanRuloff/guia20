<?php
$nombre = $_POST['nombre'];
$direccion = $_POST['direccion'];
$pizzas = $_POST['pizzas'] ?? [];
$cantidades = $_POST['cantidades'] ?? [];

$pedido = "Nombre: $nombre\nDirección: $direccion\nPizzas:\n";

foreach ($pizzas as $tipo => $seleccionada) {
    $cantidad = $cantidades[$tipo] ?? 0;
    if ($cantidad > 0) {
        $pedido .= ucfirst($tipo) . ": $cantidad\n";
    }
}

$pedido .= str_repeat("-", 20) . "\n";

file_put_contents("pedidos.txt", $pedido, FILE_APPEND);

echo "Pedido registrado con éxito.";
?>
