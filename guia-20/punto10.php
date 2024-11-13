<form action="tipo_estudios.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Nivel de estudios:<br>
    <input type="radio" name="estudios" value="sin_estudios" required> Sin estudios<br>
    <input type="radio" name="estudios" value="primarios"> Primarios<br>
    <input type="radio" name="estudios" value="secundarios"> Secundarios<br>
    <button type="submit">Enviar</button>
</form>
