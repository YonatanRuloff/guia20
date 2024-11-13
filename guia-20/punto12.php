<form action="ingresos.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Ingresos mensuales:
    <select name="ingresos">
        <option value="1">1-1000</option>
        <option value="2">1001-3000</option>
        <option value="3">>3000</option>
    </select><br>
    <button type="submit">Enviar</button>
</form>
