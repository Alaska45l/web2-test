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

<?php include '../static/includes/head.php' ?>

<body>
  <?php include '../static/includes/nav.php' ?>

  <div class="container">
    <h1>CAT STATUS</h1>
    <div class="buttons">
      <?php
      echo "<a href='?tamano=2'>2 CATS</a>";
      echo "<a href='?tamano=4'>4 CATS</a>";
      echo "<a href='?tamano=6'>6 CATS</a>";
      echo "<a href='?tamano=8'>8 CATS</a>";
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
  <?php include '../static/includes/footer.php' ?>
</body>

</html>
