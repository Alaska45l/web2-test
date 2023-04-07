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
    <h1>UpCAT</h1>
    <div class="cat_result">
      <?php
      if (!empty($_POST)) {
        $name = $_POST['name'];
        $year = $_POST['year'];
        $color = $_POST['color'];
        echo ('<div><h2>Nombre del gato </h2><p>' . $name).'</p></div>';
        echo ('<div><h2>Edad del gato </h2><p>' . $year).' años</p></div>';
        echo ('<div><h2>Color del gato </h2><p>' . $color).'</p></div>';
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
</body>

</html>
