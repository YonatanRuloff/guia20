<form action="guardar_pedido.php" method="POST">
    Nombre: <input type="text" name="nombre" required><br>
    Dirección: <input type="text" name="direccion" required><br>
    <p>Tipos de pizzas:</p>
    Jamón y Queso: <input type="checkbox" name="pizzas[jyq]" value="1"> Cantidad: <input type="number" name="cantidades[jyq]" min="0"><br>
    Napolitana: <input type="checkbox" name="pizzas[nap]" value="1"> Cantidad: <input type="number" name="cantidades[nap]" min="0"><br>
    Muzzarella: <input type="checkbox" name="pizzas[muz]" value="1"> Cantidad: <input type="number" name="cantidades[muz]" min="0"><br>
    <button type="submit">Confirmar</button>
</form>
