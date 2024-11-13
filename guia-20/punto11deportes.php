<?php
$nombre = $_POST['nombre'];
$deportes = $_POST['deportes'] ?? [];

echo "$nombre practica " . count($deportes) . " deporte(s):<br>";
foreach ($deportes as $deporte) {
    echo "- $deporte<br>";
}
?>
