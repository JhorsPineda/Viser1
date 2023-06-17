<?php
     $servername = "localhost";
     $username = "root";
     $password = "";
     $dbname = "Jhors";
 
 $conn =mysqli_connect($servername, $username, $password, $dbname);
  

?>

<!DOCTYPE html>
<html>
<head>
  <title>Interfaz de Pedido y Reporte</title>
  <link rel="stylesheet" type="text/css" href="Pedidoyreporte.css">

</head>
<body>
  <div class="container">
    <h2>Pedido</h2>
    <form>
      <div class="form-group">
        <label for="pedido">Pedido:</label>
        <input type="text" id="pedido" name="pedido">
      </div>

      <div class="form-group">
        <label for="cliente">Nombre Cliente:</label>
        <input type="text" id="cliente" name="cliente">
      </div>

      <div class="form-group">
        <label for="factura">ID Factura:</label>
        <input type="text" id="factura" name="factura">
      </div>

      <div class="form-group">
        <label for="direccion">Dirección Cliente:</label>
        <input type="text" id="direccion" name="direccion">
      </div>

      <div class="form-group">
        <label for="precio">Precio Unitario:</label>
        <input type="text" id="precio" name="precio">
      </div>

      <div class="form-group">
        <label for="telefono">Teléfono Celular:</label>
        <input type="text" id="telefono" name="telefono">
      </div>

      <div class="form-group">
        <label for="cantidad">Cantidad de Producto:</label>
        <input type="text" id="cantidad" name="cantidad">
      </div>

      <div class="form-group">
        <label for="pago">Forma de Pago:</label>
        <select id="pago" name="pago">
          <option value="efectivo">Efectivo</option>
          <option value="tarjeta">Tarjeta de Crédito</option>
          <option value="transferencia">Transferencia Bancaria</option>
        </select>
      </div>

      <div class="form-group">
        <label for="total">Total:</label>
        <input type="text" id="total" name="total">
      </div>

      <div class="form-group">
        <input type="submit" value="Realizar Pedido">
      </div>
    </form>
  </div>

  <div class="report-form">
    <h2>Reporte</h2>
    <form>
      <label for="nombre-producto">Nombre del Producto:</label>
      <input type="text" id="nombre-producto" name="nombre-producto" required>

      <label for="hora">Hora:</label>
      <input type="text" id="hora" name="hora" required>

      <label for="fecha">Fecha:</label>
      <input type="date" id="fecha" name="fecha" required>

      <label for="descripcion">Descripción:</label>
      <textarea id="descripcion" name="descripcion" required></textarea>

      <button type="submit">Enviar</button>
    </form>
  </div>

  <?php
  if (isset($_POST['pedido'], $_POST['cliente'], $_POST['factura'], $_POST['direccion'], $_POST['precio'], $_POST['telefono'], $_POST['cantidad'], $_POST['pago'], $_POST['total'])) {
  
      $pedido = $_POST['pedido'];
      $cliente = $_POST['cliente'];
      $factura = $_POST['factura'];
      $direccion = $_POST['direccion'];
      $precio = $_POST['precio'];
      $telefono = $_POST['telefono'];
      $cantidad = $_POST['cantidad'];
      $pago = $_POST['pago'];
      $total = $_POST['total'];
  
  
      $servername = "localhost";
      $username = "tu_usuario";
      $password = "tu_contraseña";
      $dbname = "nombre_base_de_datos";
  
      
     
    
      $sql = "INSERT INTO pedidos (pedido, cliente, factura, direccion, precio, telefono, cantidad, pago, total) VALUES ('$pedido', '$cliente', '$factura', '$direccion', '$precio', '$telefono', '$cantidad', '$pago', '$total')";
  
      
      if ($conn->query($sql) === TRUE) {
          echo "El pedido se ha registrado correctamente.";
      } else {
          echo "Error al registrar el pedido: " . $conn->error;
      }
  
  
      $conn->close();
  }
  ?>

</body>
</html>
