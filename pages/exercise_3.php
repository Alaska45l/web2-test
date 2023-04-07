<?php include '../static/includes/head.php' ?>

<body>
  <?php include '../static/includes/nav.php' ?>
  <div class="container">
    <h1>UpCAT</h1>
    <div class="cat_result">
      <?php
      if (!empty($_POST)) {
        $name = $_POST['name'];
        $year = $_POST['year'];
        $color = $_POST['color'];
        echo ('<div><h2>Nombre del gato </h2><p>' . $name) . '</p></div>';
        echo ('<div><h2>Edad del gato </h2><p>' . $year) . ' años</p></div>';
        echo ('<div><h2>Color del gato </h2><p>' . $color) . '</p></div>';
      } else {
      ?>
    </div>
    <form action="exercise_3.php" method="post" class="type_cat">
      <label for="name">Nombre del gato</label><input class="input_cat" type="text" name="name"></label>
      <label for="year">Edad del gato</label><input class="input_cat" type="text" name="year"></label>
      <label for="color">Color del gato</label><input class="input_cat" type="text" name="color"></label>
      <input type="submit" class="form_submit">
    </form>
  <?php } ?>
  </div>
  <?php include '../static/includes/footer.php' ?>
</body>

</html>
