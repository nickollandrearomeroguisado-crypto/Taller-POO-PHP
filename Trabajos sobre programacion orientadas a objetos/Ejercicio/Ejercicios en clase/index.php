<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehiculos</title>
</head>
<body>
    <form action="resultado.php" method="POST">
        <table border="2" width="40%">
            <thead>
                <tr>
                    <th colspan="2">Vehiculo</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Tipo de vehiculo</td>
                    <td>
                        <input type="text" name="nombre" value="">
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="enviar" value="Enviar">
                    </td>
                </tr>
            </tbody>
        </table>
    </form>
</body>
</html>