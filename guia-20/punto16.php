<?php
$archivo = "pedidos.txt";

if (file_exists($archivo)) {
    $contenido = file_get_contents($archivo);
    echo nl2br(htmlspecialchars($contenido));
} else {
    echo "No hay pedidos registrados.";
}
?>
