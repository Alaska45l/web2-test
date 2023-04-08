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

<?php include '../static/includes/head.php' ?>

<body>
  <?php include '../static/includes/nav.php' ?>
  <div class="container">
    <h1>CAT STATUS</h1>
    <ul class="cat_ul">
      <?php
      for ($i = 0; $i < count(array_keys($cats_status)); $i++) {
        $list = "<li>$number[$i] - $cats_status[$i]</li>";
        echo $list;
      }
      ?>
    </ul>
  </div>
  <?php include '../static/includes/footer.php' ?>
</body>

</html>
