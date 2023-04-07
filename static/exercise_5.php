<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../style/style.css">
  <title>Ejercicio 5</title>
</head>

<body>
  <?php include 'nav.php' ?>
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
          echo ('<h2 style="color: red; ">IMC: '.$imc.'<h2>');
          echo ('<h2 class="IMCats_result">Su Gato esta con un peso corporal insuficiente</h2> <div class="form_nota"> <p>Es importante tomar medidas para mejorar su salud. Aquí hay algunos consejos útiles:</p>
      <p>1. Asegúrate de que tu gato esté comiendo suficientes calorías y nutrientes adecuados para su edad y tamaño. Habla con un veterinario para determinar la dieta adecuada para tu gato.</p>
      <p>2. Considera darle a tu gato pequeñas comidas frecuentes durante todo el día en lugar de una o dos comidas grandes. Esto puede ayudar a estimular su apetito.</p>
      <p>3. Asegúrate de que tu gato tenga acceso constante a agua limpia y fresca. Los gatos pueden ser más propensos a beber si el agua se encuentra en un lugar fresco y apartado.</p>
      <p>4. Asegúrate de que tu gato haga suficiente ejercicio diario. Juega con él y haz que se mueva para estimular su apetito y ayudarlo a ganar masa muscular.</p>
      <p>5. Lleva a tu gato al veterinario regularmente para un chequeo de salud y para determinar si hay una causa subyacente de su bajo peso.</p>
      <p>6. Recuerda que el proceso para recuperar un peso corporal saludable para un gato con bajo peso puede ser lento y requiere paciencia y atención constante. Si tienes alguna duda o preocupación, siempre consulta con tu veterinario para obtener la mejor atención médica para tu gato.</p></div>');
        } else if ($imc >= 25) {
          echo ('<h2 style="color: orange; ">IMC: '.$imc.'<h2>');
          echo ('<h2 class="IMCats_result">Su Gato esta con sobrepeso</h2> <div class="form_nota"> <p>Hay varias cosas que puedes hacer para ayudarlo a perder peso y mejorar su salud en general:</p>
      <p>1. Controlar la alimentación: Asegúrate de que tu gato esté comiendo una dieta equilibrada y de alta calidad. Considera cambiar a una dieta específica para gatos con sobrepeso, que tenga menos calorías y más fibra. Controla las porciones y evita darle demasiadas golosinas.</p>
      <p>2. Fomentar la actividad física: Haz que tu gato haga más ejercicio y juegue con él con juguetes interactivos que lo estimulen a moverse. Intenta establecer una rutina diaria de juegos y actividades físicas para ayudar a quemar calorías adicionales.</p>
      <p>3.Acude al veterinario: Lleva a tu gato al veterinario para un examen completo y para discutir un plan de pérdida de peso personalizado. Tu veterinario puede ayudarte a establecer metas realistas y monitorear el progreso de tu gato.</p>
      <p>4. Sé paciente: La pérdida de peso en los gatos puede ser un proceso lento. Es importante ser constante y paciente en tus esfuerzos para ayudar a tu gato a perder peso de manera saludable. Con el tiempo, una dieta adecuada y un estilo de vida más activo pueden ayudar a tu gato a alcanzar un peso saludable y a mejorar su bienestar general.</p></div>');
        } else if ($imc >= 30) {
          echo ('<h2 style="color: red; ">IMC: '.$imc.'<h2>');
          echo ('<h2 class="IMCats_result">Su Gato esta con OBESIDAD!</h2> <div class="form_nota"> <p>Es importante tomar medidas para ayudarlo a alcanzar un peso saludable y reducir el riesgo de problemas de salud relacionados con el exceso de peso. A continuación, te ofrecemos algunos consejos:</p>
      <p>1. Controla la dieta de tu gato: Limita la cantidad de alimentos que le das a tu gato, especialmente si se trata de alimentos con alto contenido calórico. Consulta con tu veterinario para que te asesore sobre la cantidad y el tipo de alimentos que tu gato debe consumir.</p>
      <p>2. Incrementa la actividad física: Asegúrate de que tu gato realice actividad física regularmente. Esto puede incluir jugar con él, permitirle correr y saltar en un área segura o llevarlo a dar un paseo en un arnés.</p>
      <p>3. Reduce los premios y golosinas: Los premios y golosinas pueden sumar calorías adicionales a la dieta de tu gato. Trata de limitar estos alimentos a un mínimo y opta por opciones más saludables como trozos de pollo o pavo.</p>
      <p>4. Considera un cambio de alimentación: Puedes cambiar a un alimento especialmente formulado para gatos con sobrepeso u obesidad. Estos alimentos pueden ayudar a reducir la ingesta de calorías mientras proporcionan una nutrición equilibrada.</p>
      <p>5. Programa visitas regulares al veterinario: Programa visitas regulares al veterinario para asegurarte de que tu gato esté en buena salud y para que puedas recibir asesoramiento sobre la dieta y el estilo de vida adecuados para tu gato.</p></div>');
        } else {
          echo ('<h2 style="color: green; ">IMC: '.$imc.'<h2>');
          echo ('<h2 class="IMCats_result">Su Gato tiene un peso normal</h2> <div class="form_nota"> <p>¡Felicidades! Un peso saludable puede ayudar a prevenir una serie de problemas de salud en los gatos, incluyendo enfermedades del corazón, diabetes y problemas respiratorios.</p>
      <p>1. Para mantener a tu gato en un peso saludable, es importante proporcionarle una dieta equilibrada y asegurarte de que tenga suficiente ejercicio. Proporciona una dieta de alta calidad que contenga los nutrientes que tu gato necesita, en las cantidades adecuadas. Asegúrate de no sobrealimentar a tu gato, y trata de limitar la cantidad de golosinas y alimentos extras que recibe.</p>
      <p>2. Además, es importante que tu gato tenga suficiente ejercicio. Dale a tu gato la oportunidad de jugar y explorar. Los gatos necesitan tiempo para jugar y moverse para mantenerse en forma y saludables. Considera la posibilidad de proporcionar juguetes para gatos, estructuras para trepar y rascar, y tiempo para jugar contigo y con otros gatos.</p>
      <p>3. Recuerda, un peso saludable es un componente clave para mantener a tu gato feliz y saludable. Si tienes alguna preocupación sobre el peso de tu gato o necesitas más consejos para mantener a tu gato en forma, consulta a un veterinario.</p></div>');
        }
      } else {
      ?> </div>
    <form action="exercise_5.php" method="post" class="type_cat">
      <label for="name">LIM* (LIM)</label><input class="input_cat" type="number" name="LIM"></label>
      <label for="year">Caja toracica (cm)</label><input class="input_cat" type="number" name="longitud"></label>
      <input type="submit" class="form_submit">
    </form>
    <div class="form_nota">
      <img src="img/cat-ribcage.svg" alt="aa">
      <h2>Cómo medir la caja torácica</h2>
      <p>
      Tienes que medir la circunferencia aproximada a la altura de la 9na costilla.
      </p>
    </div>
    <div class="form_nota">
      <img src="img/cat-lim.svg" alt="aa">
      <h2>Cómo medir el LIM</h2>
      <p>
      Mide la longitud de la parte inferior de la pata trasera desde la rodilla hasta el tobillo.
      </p>
    </div>

  <?php } ?>
  </div>
</body>

</html>
