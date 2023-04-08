<?php include '../static/includes/head.php' ?>

<body>

  <?php include '../static/includes/nav.php' ?>
  <div class="container container-exercise_6">
    <h1>MathCAT</h1>
    <?php
    if (!empty($_POST)) {
      $limite = $_POST['math'];

      echo "<table>";
      echo "<tr><th>-</th>"; // cuadro vacio para que quede ordenada
  
      for ($i = 1; $i <= $limite; $i++) {
        echo "<th>$i</th>"; // crea y ordena la primera tabla
      }
  
      echo "</tr>";
  
      for ($i = 1; $i <= $limite; $i++) {
        echo "<tr>";
        echo "<th>$i</th>"; // crea y ordena la primera fila
  
        for ($j = 1; $j <= $limite; $j++) {
          echo "<td>" . ($i * $j) . "</td>";
        }
  
        echo "</tr>";
      }
  
      echo "</table>";
    } else {
    ?>
      <form action="exercise_6.php" method="post" class="type_cat">
        <label for="math">Ingrese el limite de la tabla</label><input class="input_cat" type="number" name="math"></label>
        <input type="submit" class="form_submit">
      </form>
    <?php } ?>
  </div>
  <?php include '../static/includes/footer.php' ?>
</body>

</html>
