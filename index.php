<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora de IVA</title>
</head>
<body>
  <h2>Calculadora de Precio con IVA (16%)</h2>
  <form method="POST">
    <label for="monto">Monto de la compra (MXN):</label><br>
    <input type="number" name="monto" step="0.01" required><br><br>
    <input type="submit" value="Calcular Total">
  </form>

  <?php
  function calcularIVA($monto) {
    return $monto * 0.16;
  }

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $monto = floatval($_POST["monto"]);
    $iva = calcularIVA($monto);
    $total = $monto + $iva;

    echo "<h3>Resultado:</h3>";
    echo "Subtotal: $" . number_format($monto, 2) . "<br>";
    echo "IVA (16%): $" . number_format($iva, 2) . "<br>";
    echo "<strong>Total a pagar: $" . number_format($total, 2) . "</strong>";
  }
  ?>
</body>
</html>
