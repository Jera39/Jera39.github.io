<?php
$nombre = $_POST['fullname'];
$email = $_POST['email'];
$telefono = $_POST['phone'];
$asunto = $_POST['affair'];
$mensaje = $_POST['message'];

// Datos de conexión a la base de datos
$host = 'localhost';
$usuario = 'root';
$contrasena = '';
$dbname = 'phpdb';

try {
    // Conexión a la base de datos
    $conexion = new PDO("mysql:host=$host;dbname=$dbname", $usuario, $contrasena);
    echo "Se conectó correctamente a la base de datos";

    // Consulta SQL para insertar los datos en la tabla
    $sql = "INSERT INTO consultas (nombre, email, telefono, asunto, mensaje, fecha) VALUES (:nombre, :email, :telefono, :asunto, :mensaje, current_timestamp())";
    
    // Preparar la consulta
    $stmt = $conexion->prepare($sql);
    
    // Asignar los valores a los parámetros de la consulta
    $stmt->bindParam(':nombre', $nombre);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':telefono', $telefono);
    $stmt->bindParam(':asunto', $asunto);
    $stmt->bindParam(':mensaje', $mensaje);
    
    // Ejecutar la consulta
    $stmt->execute();
    
    // Redireccionar a la página después de guardar los datos
    header('Location: FORM.HTML');
    
} catch (PDOException $exp) {
    echo "No se logró conectar correctamente con la base de datos: $dbname, error: $exp";
}
?>
