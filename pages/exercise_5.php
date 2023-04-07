<?php include '../static/includes/head.php' ?>

<body>
  <?php include '../static/includes/nav.php' ?>
  <div class="container">
    <h1>IMCats</h1>
    <div class="IMCat_result_container">
      <?php
      if (!empty($_POST)) {
        $lim = $_POST['LIM'];
        $longitud = $_POST['longitud'];

        // calcular IMCats

        $imc = ((($longitud / 0.7062) - $lim) / 0.9156) - $lim;

        $imc = round($imc, 1);

        if ($imc < 18.5) {
          echo ('<h2 style="color: red; ">IMC: ' . $imc . '<h2>');
          echo (include '../static/includes/exercise_5/imc_bajo.php');
        } else if ($imc >= 25) {
          echo ('<h2 style="color: orange; ">IMC: ' . $imc . '<h2>');
          echo (include '../static/includes/exercise_5/imc_sobrepeso.php');
        } else if ($imc >= 30) {
          echo ('<h2 style="color: red; ">IMC: ' . $imc . '<h2>');
          echo (include '../static/includes/exercise_5/imc_obesidad.php');
        } else {
          echo ('<h2 style="color: green; ">IMC: ' . $imc . '<h2>');
          echo (include '../static/includes/exercise_5/imc_normal.php');
        }
      } else {
      ?> </div>
    <form action="exercise_5.php" method="post" class="type_cat">
      <label for="name">LIM* (cm)</label><input class="input_cat" type="number" name="LIM"></label>
      <label for="year">Caja toracica (cm)</label><input class="input_cat" type="number" name="longitud"></label>
      <input type="submit" class="form_submit">
    </form>
    <div class="form_nota">
      <img src="../static/img/cat-lim.svg" alt="aa">
      <h2>Cómo medir el LIM</h2>
      <p>
        Mide la longitud de la parte inferior de la pata trasera desde la rodilla hasta el tobillo.
      </p>
    </div>
    <div class="form_nota">
      <img src="../static/img/cat-ribcage.svg" alt="aa">
      <h2>Cómo medir la caja torácica</h2>
      <p>
        Tienes que medir la circunferencia aproximada a la altura de la 9na costilla.
      </p>
    </div>

  <?php } ?>
  </div>
  </div>
  <?php include '../static/includes/footer.php' ?>
</body>

</html>
