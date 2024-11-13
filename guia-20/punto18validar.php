<?php
function validar_claves($clave1, $clave2) {
    if ($clave1 !== $clave2) {
        return "Las contraseñas no coinciden.";
    }
    return "Las contraseñas coinciden. Registro exitoso.";
}

$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];

echo validar_claves($clave1, $clave2);
?>
