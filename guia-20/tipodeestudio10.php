<?php
$nombre = $_POST['nombre'];
$estudios = $_POST['estudios'];

echo "$nombre tiene estudios de tipo: ";
if ($estudios == "sin_estudios") {
    echo "Sin estudios.";
} elseif ($estudios == "primarios") {
    echo "Estudios primarios.";
} else {
    echo "Estudios secundarios.";
}
?>
