<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" href="css/almacen_style.css">
    <title>Almacén</title>
</head>
<body>
    <center>
        <a href="../panel/panel.php"><img src="logo/home.png" class="img2" alt="Almacén"></a>
        <div class = "contenedor">
            </br><h1>LA GUARACHERA</br>Licores y Cigarrillos</h1>
            <form method="GET">
                <label>Seleccionar Producto</label>
                <select name="producto">
                    <option value="licor">Licor</option>
                    <option value="cigarrillo">Cigarrillo</option>
                </select><br><br>

                <label>Buscar Marca</label>
                <input type="text" name="buscar" placeholder="Buscar producto"><br><br>

                <button type="submit">Consultar</button>
            </form>
        

            <?php
// Aquí deberías buscar los productos en la base de datos o en un arreglo
                if (isset($_GET['buscar'])) {
                    echo "<h3>Resultados de la búsqueda:</h3>";
// Mostrar tabla con los resultados (esto es solo un ejemplo)
                    echo "<table border='1'>
                            <tr>
                                <th>Producto</th>
                                <th>Marca</th>
                                <th>Cantidad Disponible</th>
                                <th>Valor</th>
                            </tr>
                            <tr>
                                <td>Licor A</td>
                                <td>Marca X</td>
                                <td>50</td>
                                <td>100.000</td>
                            </tr>
                            <tr>
                                <td>Licor B</td>
                                <td>Marca Y</td>
                                <td>30</td>
                                <td>70.000</td>
                            </tr>
                            <tr>
                                <td>Licor C</td>
                                <td>Marca Z</td>
                                <td>70</td>
                                <td>200.000</td>
                            </tr>
                            <tr>
                                <td>Cigarrillo A</td>
                                <td>Marca X</td>
                                <td>100</td>
                                <td>150.000</td>
                            </tr>
                            <tr>
                                <td>Cigarrillo B</td>
                                <td>Marca Y</td>
                                <td>80</td>
                                <td>90.000</td>
                            </tr>
                            <tr>
                                <td>Cigarrillo C</td>
                                <td>Marca Z</td>
                                <td>150</td>
                                <td>280.000</td>
                            </tr>
                        </table>";
                }
            ?>
        </br>
        </div>
    </center>
</body>
</html>