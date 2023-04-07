<?php

// array asociativo

$cats_status = [
  "0" => "Chimuelo",
  "1" => "Akira",
  "2" => "Chispita",
  "3" => "Wendy",
  "4" => "Batato",
  "5" => "Michu"
];

// array indexados

$number = [1, 2, 3, 4, 5, 6];

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
  <?php include 'nav.php' ?>
  <div class="container">
    <h1>CAT STATUS</h1>
    <ul class="cat_ul">
      <?php
      for ($i = 0; $i < count(array_keys($cats_status)); $i++) {
        $list = '<li> ' . $number[$i] . ' - ' . $cats_status[$i] . '</li>';
        echo $list;
      }
      ?>
    </ul>
  </div>
</body>

</html>
