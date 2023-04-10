<?php

// array asociativo

$cats_status = ["Chimuelo", "Akira", "Chispita", "Wendy", "Batato", "Michu", "Burbuja", "Tornillo", "Wilson",
                "Luna", "Simba", "Cleo", "Loki", "Mimi", "Garfield", "Oliver", "Nala", "Salem", "Socks",
                "Whiskers", "Tom", "Jerry", "Fluffy", "Snowball", "Tiger", "Muffin", "Boots", "Felix", "Ginger", "Misty"];

// tamano de lista

$cantidadLista = $_GET["tamano"];

?>

<?php include '../static/includes/head.php' ?>

<body>
  <?php include '../static/includes/nav.php' ?>

  <div class="container">
    <h1>CAT Names</h1>
    <div class="buttons">
      <?php
      echo "<a href='?tamano=5'>5 CATS</a>";
      echo "<a href='?tamano=15'>15 CATS</a>";
      echo "<a href='?tamano=25'>25 CATS</a>";
      echo "<a href='?tamano=30'>30 CATS</a>";
      ?>
    </div>
    <ul class="cat_ul">
      <?php
      for ($i = 0; $i < $cantidadLista; $i++) {
        $list = "<li> $cats_status[$i]</li>";
        echo $list;
      }
      ?>
    </ul>
  </div>
  <?php include '../static/includes/footer.php' ?>
</body>

</html>
