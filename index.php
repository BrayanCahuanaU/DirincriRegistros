<?php
/* $servername = "tu_servidor";
$username = "tu_usuario";
$password = "tu_contraseña";
$dbname = "tu_base_de_datos";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Conexión a la base de datos fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $email = $_POST["email"];

    $sql = "INSERT INTO usuarios (username, email) VALUES ('$username', '$email')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$result = $conn->query("SELECT * FROM usuarios"); */
?>

<!DOCTYPE html>
<html>
<head>
    <title>Registro de Usuarios</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <h2>Registro de Usuarios</h2>

    <form method="post">
        <label for="username">Nombre de usuario:</label>
        <input type="text" name="username" required><br>

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" required><br>

        <button type="submit">Registrar</button>
    </form>

    <table>
        <tr>
            <th>ID</th>
            <th>Nombre de Usuario</th>
            <th>Correo Electrónico</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
/*                 echo "<tr>
                        <td>" . $row["id"] . "</td>
                        <td>" . $row["username"] . "</td>
                        <td>" . $row["email"] . "</td>
                      </tr>"; "*/
                    echo "  <tr>
                                <td>id</td>
                                <td>usuername</td>
                                <td>email</td>
                            </tr>
                         ";
            }
        } else {
            echo "<tr><td colspan='3'>No hay registros disponibles.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
