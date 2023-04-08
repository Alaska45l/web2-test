<?php include '../static/includes/head.php' ?>

<body>
  <?php include '../static/includes/nav.php' ?>
  <div class="container container-exercise7">
    <h1>CATompound Calculator</h1>

    <?php
    if (!empty($_POST)) {
      $userInicial = $_POST['inicial'];
      $userPorcentaje = $_POST['porcentaje'];
      $userPorcentaje = $userPorcentaje / 100;

      echo (include '../static/includes/exercise_7/table.php');

      for ($i = 1; $i <= 12; $i++) {
        $calculo = $userInicial * (1 + ($userPorcentaje / $i)) ** ($i * $i);
        $calculo = round($calculo, 0);
        echo ("<th>$calculo</th>");
      }

      echo ("</tr>
      </tbody>
      </table>
      </div>");
    } else {
    ?>

      <form action="exercise_7.php" method="post" class="type_cat">
        <label for="math">Ingrese el dinero inicial</label><input class="input_cat" type="number" name="inicial"></label>
        <label for="math">Ingrese el porcentaje de interes</label><input class="input_cat" type="number" name="porcentaje"></label>
        <input type="submit" class="form_submit">
      </form>

    <?php } ?>
  </div>
  <?php include '../static/includes/footer.php' ?>
</body>

</html>
