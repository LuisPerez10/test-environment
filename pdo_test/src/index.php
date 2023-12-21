<?php
// index.php

$host = 'mysql';
$db = 'crud_example';
$user = 'user';
$pass = 'password';

try {
    $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Error: " . $e->getMessage());
}
// $pdo->query('KILL CONNECTION_ID()');
// $pdo = null;

$query = $pdo->query('SELECT 1');

if ($query !== false) {
    // La consulta fue ejecutada con éxito
    echo 'Query executed successfully';
} else {
    // La consulta falló
    echo 'Query failed';
}
// Insertar datos en la base de datos
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];

    try {
        $stmt = $pdo->prepare("INSERT INTO users (name, email) VALUES (:name, :email)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->execute();

        echo "Usuario agregado con éxito.";
    } catch (PDOException $e) {
        echo "Error al insertar usuario: " . $e->getMessage();
    }
}

// Mostrar datos desde la base de datos
echo "<h2>Usuarios:</h2>";

try {
    $query = $pdo->query("SELECT * FROM users");
    $users = $query->fetchAll(PDO::FETCH_ASSOC);

    if (count($users) > 0) {
        echo "<ul>";
        foreach ($users as $user) {
            echo "<li>{$user['id']} - {$user['name']} - {$user['email']}</li>";
        }
        echo "</ul>";
    } else {
        echo "No hay usuarios en la base de datos.";
    }
} catch (PDOException $e) {
    echo "Error al obtener datos: " . $e->getMessage();
}
?>

<!-- Formulario para insertar un nuevo usuario -->
<h2>Agregar Usuario:</h2>
<form method="post">
    <label for="name">Nombre:</label>
    <input type="text" name="name" required>
    <br>
    <label for="email">Correo electrónico:</label>
    <input type="email" name="email" required>
    <br>
    <button type="submit">Agregar Usuario</button>
</form>
