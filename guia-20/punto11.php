<form action="deportes.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Deportes:<br>
    <input type="checkbox" name="deportes[]" value="Fútbol"> Fútbol<br>
    <input type="checkbox" name="deportes[]" value="Basket"> Basket<br>
    <input type="checkbox" name="deportes[]" value="Tennis"> Tennis<br>
    <input type="checkbox" name="deportes[]" value="Voley"> Voley<br>
    <button type="submit">Enviar</button>
</form>
