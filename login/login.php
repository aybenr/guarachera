<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <link rel="stylesheet" href="css/login_style.css">
    <title>LA GUARACHERA</title>
</head>
<body>
    <center>
        <div class = "contenedor">
            </br><h1>LA GUARACHERA</br>Licores y Cigarrillos</h1>

            <form method="POST">
                </br>
                <label>Usuario</label><br>
                <input type="text" name="usuario" required><br><br>

                <label>Contraseña</label><br>
                <input type="password" name="contrasena" required><br><br>
                
                <button type="submit" name = "enviar">Iniciar sesión</button>
                </br></br>
            </form>
        </div>
    </center>

    <?php
        if (isset($_POST['enviar'])) {
// Aquí iría la validación del usuario
            $usuario = $_POST['usuario'];
            $contrasena = $_POST['contrasena'];
        
// Validar credenciales (esto es solo un ejemplo, con una base de datos sería más seguro)
            if ($usuario == "admin" && $contrasena == "1234") {
                header("Location: ../panel/panel.php");
                exit();
            }
            else {
                echo "<script>alert('Usuario o contraseña incorrectos.')</script>";
            }
        }
    ?>
</body>
</html>