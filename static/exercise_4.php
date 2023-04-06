<?php



// array asociativo

$cats_status = [
  "0" => "Chimuelo",
  "1" => "Akira",
  "2" => "Chispita",
  "3" => "Wendy",
  "4" => "Batato",
  "5" => "Michu",
  "6" => "Burbuja",
  "7" => "Tornillo",
  "8" => "Wilson"
];

// array indexados

$number = [2017, 2017, 2017, 2015, 2012, 2006, 2004, 2003, 1994];

// tamano de lista

$tamano = $_GET["tamano"];

$cantidadLista = $tamano;

?>

<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/style.css">
  <title>Cat status</title>
</head>

<body>
  <div class="container">
    <h1>CAT STATUS</h1>
    <div class="buttons">
      <?php
      echo "<a href='?tamano=2'>2 Gatos</a>";
      echo "<a href='?tamano=4'>4 Gatos</a>";
      echo "<a href='?tamano=6'>6 Gatos</a>";
      echo "<a href='?tamano=8'>8 Gatos</a>";
      ?>
    </div>
    <ul class="cat_ul">
      <?php
      for ($i = 0; $i < $cantidadLista; $i++) {
        $list = '<li> ' . $number[$i] . ' - ' . $cats_status[$i] . '</li>';
        echo $list;
      }
      ?>
    </ul>
  </div>
</body>

</html>
