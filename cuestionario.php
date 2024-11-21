<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Síntomas</title>
    <link rel="stylesheet" href="CSS/cuestionario.css">
    <link rel="icon" type="image/x-icon" href="styles/logo_flat.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
   
    <!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
</head>
<body>
<?php include 'header-footer/header.php';?>
<div class="container">
    <h1 class="text-center my-3">Test de Síntomas</h1>
    <form id="symptomTest" class="mx-4">
        <div class="question">
            <p><strong>1. ¿Has experimentado sed excesiva?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>2. ¿Notas que tienes hambre constantemente, incluso después de comer?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>3. ¿Experimentas cansancio o fatiga extrema frecuentemente?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>4. ¿Has notado pérdida de peso inesperada recientemente?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>5. ¿Tienes visión borrosa o problemas para enfocar tu vista?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>6. ¿Tus heridas tardan más de lo normal en sanar?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>7. ¿Experimentas hormigueo o entumecimiento en manos o pies?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>8. ¿Orinas con frecuencia, incluso durante la noche?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>9. ¿Notas cambios en lunares o manchas en la piel (tamaño, forma, color)?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>10. ¿Has observado sangrado o secreción inusual (por ejemplo, sangre en heces, orina, o al toser)?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>11. ¿Has notado bultos o hinchazón en alguna parte del cuerpo?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>12. ¿Has notado pérdida de apetito o que te sientes lleno incluso después de comer poco?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>13. ¿Sientes dolor en los huesos o articulaciones que empeora con el tiempo?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>14. ¿Has notado que tu piel está más pálida o amarillenta?</strong></p>
            <input type="radio" name="q1" value="diabetes"> Sí<br>
            <input type="radio" name="q1" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>15. ¿Tienes dificultad para tragar o sientes que la comida se queda atascada al tragar?</strong></p>
            <input type="radio" name="q2" value="cardio"> Sí<br>
            <input type="radio" name="q2" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>16. ¿Sientes dolor o presión en el pecho, especialmente al hacer ejercicio o al estar estresado?</strong></p>
            <input type="radio" name="q2" value="cardio"> Sí<br>
            <input type="radio" name="q2" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>17. ¿Experimentas dificultad para respirar incluso cuando no estás haciendo ejercicio?</strong></p>
            <input type="radio" name="q2" value="cardio"> Sí<br>
            <input type="radio" name="q2" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>18. ¿Tienes palpitaciones o un ritmo cardíaco irregular (latidos rápidos o lentos)?</strong></p>
            <input type="radio" name="q2" value="cardio"> Sí<br>
            <input type="radio" name="q2" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>19. ¿Tienes hinchazón en las piernas, tobillos o pies sin razón aparente?</strong></p>
            <input type="radio" name="q2" value="cardio"> Sí<br>
            <input type="radio" name="q2" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>20. ¿Tienes dificultad para realizar actividades físicas que antes podías hacer sin problemas (como caminar, subir escaleras)?</strong></p>
            <input type="radio" name="q2" value="cardio"> Sí<br>
            <input type="radio" name="q2" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>21. ¿Has tenido episodios de sudoración excesiva sin estar haciendo ejercicio o estar en un lugar caluroso?</strong></p>
            <input type="radio" name="q2" value="cardio"> Sí<br>
            <input type="radio" name="q2" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>22. ¿Experimentas sensación de ansiedad o presión en el pecho, como si algo estuviera apretando tu corazón?</strong></p>
            <input type="radio" name="q3" value="cancer"> Sí<br>
            <input type="radio" name="q3" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>23. ¿Te ha costado dormir debido a la falta de aire o molestias en el pecho?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>24. ¿Tienes antecedentes familiares de enfermedades del corazón, como infartos o insuficiencia cardíaca?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>25. ¿Sufres de mareos o desmayos frecuentes sin una causa clara?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>26. ¿Notas cambios en el color de la piel, especialmente en labios o uñas (se vuelven morados o azulados)?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>27. ¿Tienes silbidos o sibilancias al respirar, especialmente al exhalar?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>28. ¿Te falta el aliento al realizar actividades cotidianas como subir escaleras o caminar?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>29. ¿Tienes infecciones respiratorias frecuentes, como resfriados o bronquitis que te duran más de lo normal?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>30. ¿Te despiertas con dificultad para respirar o sientes que te falta el aire durante la noche?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>31. ¿Has notado que tu tos o dificultad para respirar empeoran en ambientes polvorientos o al exponerte a humo o contaminantes?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>32. ¿Tienes antecedentes de fumar o has estado expuesto a humo de segunda mano durante un largo período?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>33. ¿Experimentas ronquera o una sensación de garganta irritada con frecuencia?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <div class="question">
            <p><strong>34. ¿Te ha costado mucho tiempo recuperar de un resfriado o gripe, con síntomas respiratorios persistentes?</strong></p>
            <input type="radio" name="q4" value="respiratory"> Sí<br>
            <input type="radio" name="q4" value="none"> No<br>
        </div>
        <button type="button" class="btn" onclick="evaluateTest()">Enviar</button>
    </form>

    <h2 id="result" class="m-4"></h2>
</div>
    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="JS/test.js"></script>
</body>
</html>
