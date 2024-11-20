<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" href="css/ventas_style.css">
    <title>Registrar Venta</title>
</head>
<body>
    <center>
        <a href="../panel/panel.php"><img src="logo/home.png" class="img2" alt="Almacén"></a>
        <div class = "contenedor">
            <h1>LA GUARACHERA</br>Licores y Cigarrillos</h1>
            <h3>Registrar Venta</h3>
            <form method="POST">
                <label>Seleccionar Producto:</label><br>
                <select name="producto">
                    <option value="licor">Licor</option>
                    <option value="cigarrillo">Cigarrillo</option>
                </select><br><br>

                <label>Marca:</label><br>
                <input type="text" id="marca" name="marca" required><br><br>

                <label>Cantidad:</label><br>
                <input type="number" id="cantidad" name="cantidad" required><br><br>

                <label>Valor:</label><br>
                <input type="number" id="valor" name="valor" required><br><br>

                <button type="submit">Registrar Venta</button>
            </form>

            <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
// Obtener datos de la venta y registrarlos
                    $producto = $_POST['producto'];
                    $marca = $_POST['marca'];
                    $cantidad = $_POST['cantidad'];
                    $valor = $_POST['valor'];
// Mostrar los datos registrados (esto es solo un ejemplo)
                    echo "<h3>Venta registrada:</h3>";

                    echo "<table border='1'>
                            <tr>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Cantidad Disponible</th>
                                <th>Valor</th>
                            </tr>
                            <tr>
                                <td>$producto</td>
                                <td>$marca</td>
                                <td>$cantidad</td>
                                <td>$$valor</td>
                            </tr>
                        </table>";
                }
            ?>
            </br>
        </div>
    </center>
</body>
</html>