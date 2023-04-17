<?php include '../static/includes/head.php' ?>

<body>
  <?php include '../static/includes/nav.php' ?>

  <section class="container container-exercise_8">
    <h1>CATSIO Fx-991</h1>
    <?php
    if (isset($_GET) && !empty($_GET)) {

      if (isset($_GET['aboutMe'])) {
        echo (include '../static/includes/exercise_8/about_me.php');
      }
      else if (isset($_GET['piNumber'])){
        echo (include '../static/includes/exercise_8/pi_number.php');
      }
      else {
        $operando = $_GET['operando'];
        $num1 = $_GET['num1'];
        $num2 = $_GET['num2'];
        $operacion = "Error 404";

        switch ($operando) {
          case 'sumar':
            $operacion = "suma";
            $operando = $num1 + $num2;
            break;
          case 'restar':
            $operacion = "resta";
            $operando = $num1 - $num2;
            break;
          case 'multiplicar':
            $operacion = "multiplicacion";
            $operando = $num1 * $num2;
            break;
          case 'dividir':
            if ($num2 == 0) {
              $operacion = "<strong style='color: red;'> Syntax Error </strong>";
              $operando =  "<strong style='color: red;'> No se puede divir con 0 </strong>";
              break;
            }
            $operacion = "divicion";
            $operando = $num1 / $num2;
            break;
        }

        echo ("<h2 class='exercise_8-resultado'>El resultado de la operacion $operacion es: $operando</h2>");
      }
    } else {
    ?>
      <div class="buttons exercise_8-links">
        <a href="?aboutMe">About Me</a>
        <a href="?piNumber">PI number</a>
      </div>
      <form action="exercise_8.php" method="GET" class="type_cat">
        <label for="math">Operacion 1</label><input class="input_cat" type="number" name="num1"></label>
        <select name="operando" class="input_cat select_cat">
          <option value="sumar">Sumar</option>
          <option value="restar">Restar</option>
          <option value="multiplicar">Multiplicar</option>
          <option value="dividir">Dividir</option>
        </select>
        <label for="math">Operacion 2</label><input class="input_cat" type="number" name="num2"></label>
        <input type="submit" class="form_submit">
      </form>
    <?php } ?>
  </section>

  <?php include '../static/includes/footer.php' ?>
</body>

</html>
