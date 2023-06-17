<?php
// Verificar si se envió el formulario de pedido
if (isset($_POST['pedido'], $_POST['cliente'], $_POST['factura'], $_POST['direccion'], $_POST['precio'], $_POST['telefono'], $_POST['cantidad'], $_POST['pago'], $_POST['total'])) {
    // Obtener los datos del formulario
    $pedido = $_POST['pedido'];
    $cliente = $_POST['cliente'];
    $factura = $_POST['factura'];
    $direccion = $_POST['direccion'];
    $precio = $_POST['precio'];
    $telefono = $_POST['telefono'];
    $cantidad = $_POST['cantidad'];
    $pago = $_POST['pago'];
    $total = $_POST['total'];

    // Conectar a la base de datos (reemplaza los valores con los tuyos)
    $servername = "localhost";
    $username = "tu_usuario";
    $password = "tu_contraseña";
    $dbname = "nombre_base_de_datos";

    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar la conexión a la base de datos
    if ($conn->connect_error) {
        die("Error al conectar a la base de datos: " . $conn->connect_error);
    }

    // Preparar la consulta SQL para insertar los datos del pedido
    $sql = "INSERT INTO pedidos (pedido, cliente, factura, direccion, precio, telefono, cantidad, pago, total) VALUES ('$pedido', '$cliente', '$factura', '$direccion', '$precio', '$telefono', '$cantidad', '$pago', '$total')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo "El pedido se ha registrado correctamente.";
    } else {
        echo "Error al registrar el pedido: " . $conn->error;
    }

    // Cerrar la conexión a la base de datos
    $conn->close();
}
?>