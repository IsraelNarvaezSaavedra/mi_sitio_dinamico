<?php
// Estructura asociativa: producto => precio
$productos = [
  "Pan de Camas"        => 1.20,
  "Aceitunas aliñadas"  => 2.50,
  "Tortas de aceite"    => 3.00,
  "Jamones"             => 10.50
];
?>

<h2 class="text-success text-center mt-4">Productos locales de Camas</h2>

<table class="table table-bordered table-striped w-75 mx-auto mt-4 text-center align-middle">
  <thead class="table-primary">
    <tr>
      <th>Producto</th>
      <th>Precio (€)</th>
    </tr>
  </thead>
  <tbody>
    <?php
      $nombre = array_keys($productos);
      $precio = array_values($productos);
      for ($i=0; $i < count($productos); $i++) { 
        echo "<tr><td>".$nombre[$i]."</td>";
        echo "<td>".$precio[$i]."</td></tr>";
      }
    ?>
  </tbody>
</table>
