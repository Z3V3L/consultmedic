<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test de Síntomas</title>
    <link rel="icon" type="image/x-icon" href="styles/logo_flat.png">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />

	<!-- Custom styles for this template -->
    <link href="product.css" rel="stylesheet">
    <link href="styles/style.css" rel="stylesheet">
    <style>
        html body header.site-header.sticky-top{
            position: absolute;
            width: 100%;
        }
        .label-q{
            padding-left:6px;
            font-size: 1.25rem;
        }
    </style>

    <link rel="stylesheet" href="CSS/cuestionario.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body class="gradient-background">
    <?php include 'header-footer/header.php';?>

    
    <h1>Test de Síntomas</h1>
    <form id="symptomTest">
        <div class="question-card active">
            <p><strong>1. ¿Has experimentado sed excesiva?</strong></p>
            <input type="radio" name="q1" value="diabetes" id="q1-s" onchange="updateQuestionView();"><label for="q1-s" class="label-q">Sí</label><br>
            <input type="radio" name="q1" value="none" id="q1-n" onchange="updateQuestionView();"><label for="q1-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>2. ¿Notas que tienes hambre constantemente, incluso después de comer?</strong></p>
            <input type="radio" name="q2" value="diabetes" id="q2-s" onchange="updateQuestionView();"><label for="q2-s" class="label-q">Sí</label><br>
            <input type="radio" name="q2" value="none" id="q2-n" onchange="updateQuestionView();"><label for="q2-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>3. ¿Experimentas cansancio o fatiga extrema frecuentemente?</strong></p>
            <input type="radio" name="q3" value="diabetes" id="q3-s" onchange="updateQuestionView();"><label for="q3-s" class="label-q">Sí</label><br>
            <input type="radio" name="q3" value="none" id="q3-n" onchange="updateQuestionView();"><label for="q3-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>4. ¿Has notado pérdida de peso inesperada recientemente?</strong></p>
            <input type="radio" name="q4" value="diabetes" id="q4-s" onchange="updateQuestionView();"><label for="q4-s" class="label-q">Sí</label><br>
            <input type="radio" name="q4" value="none" id="q4-n" onchange="updateQuestionView();"><label for="q4-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>5. ¿Tienes visión borrosa o problemas para enfocar tu vista?</strong></p>
            <input type="radio" name="q5" value="diabetes" id="q5-s" onchange="updateQuestionView();"><label for="q5-s" class="label-q">Sí</label><br>
            <input type="radio" name="q5" value="none" id="q5-n" onchange="updateQuestionView();"><label for="q5-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>6. ¿Tus heridas tardan más de lo normal en sanar?</strong></p>
            <input type="radio" name="q6" value="diabetes" id="q6-s" onchange="updateQuestionView();"><label for="q6-s" class="label-q">Sí</label><br>
            <input type="radio" name="q6" value="none" id="q6-n" onchange="updateQuestionView();"><label for="q6-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>7. ¿Experimentas hormigueo o entumecimiento en manos o pies?</strong></p>
            <input type="radio" name="q7" value="diabetes" id="q7-s" onchange="updateQuestionView();"><label for="q7-s" class="label-q">Sí</label><br>
            <input type="radio" name="q7" value="none" id="q7-n" onchange="updateQuestionView();"><label for="q7-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>8. ¿Orinas con frecuencia, incluso durante la noche?</strong></p>
            <input type="radio" name="q8" value="diabetes" id="q8-s" onchange="updateQuestionView();"><label for="q8-s" class="label-q">Sí</label><br>
            <input type="radio" name="q8" value="none" id="q8-n" onchange="updateQuestionView();"><label for="q8-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>9. ¿Notas cambios en lunares o manchas en la piel (tamaño, forma, color)?</strong></p>
            <input type="radio" name="q9" value="cancer" id="q9-s" onchange="updateQuestionView();"><label for="q9-s" class="label-q">Sí</label><br>
            <input type="radio" name="q9" value="none" id="q9-n" onchange="updateQuestionView();"><label for="q9-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>10. ¿Has observado sangrado o secreción inusual (por ejemplo, sangre en heces, orina, o al toser)?</strong></p>
            <input type="radio" name="q10" value="cancer" id="q10-s" onchange="updateQuestionView();"><label for="q10-s" class="label-q">Sí</label><br>
            <input type="radio" name="q10" value="none" id="q10-n" onchange="updateQuestionView();"><label for="q10-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>11. ¿Has notado bultos o hinchazón en alguna parte del cuerpo?</strong></p>
            <input type="radio" name="q11" value="cancer" id="q11-s" onchange="updateQuestionView();"><label for="q11-s" class="label-q">Sí</label><br>
            <input type="radio" name="q11" value="none" id="q11-n" onchange="updateQuestionView();"><label for="q11-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>12. ¿Has notado pérdida de apetito o que te sientes lleno incluso después de comer poco?</strong></p>
            <input type="radio" name="q12" value="cancer" id="q12-s" onchange="updateQuestionView();"><label for="q12-s" class="label-q">Sí</label><br>
            <input type="radio" name="q12" value="none" id="q12-n" onchange="updateQuestionView();"><label for="q12-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>13. ¿Sientes dolor en los huesos o articulaciones que empeora con el tiempo?</strong></p>
            <input type="radio" name="q13" value="cancer" id="q13-s" onchange="updateQuestionView();"><label for="q13-s" class="label-q">Sí</label><br>
            <input type="radio" name="q13" value="none" id="q13-n" onchange="updateQuestionView();"><label for="q13-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>14. ¿Has notado que tu piel está más pálida o amarillenta?</strong></p>
            <input type="radio" name="q14" value="cancer" id="q14-s" onchange="updateQuestionView();"><label for="q14-s" class="label-q">Sí</label><br>
            <input type="radio" name="q14" value="none" id="q14-n" onchange="updateQuestionView();"><label for="q14-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>15. ¿Tienes dificultad para tragar o sientes que la comida se queda atascada al tragar?</strong></p>
            <input type="radio" name="q15" value="cancer" id="q15-s" onchange="updateQuestionView();"><label for="q15-s" class="label-q">Sí</label><br>
            <input type="radio" name="q15" value="none" id="q15-n" onchange="updateQuestionView();"><label for="q15-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>16. ¿Sientes dolor o presión en el pecho, especialmente al hacer ejercicio o al estar estresado?</strong></p>
            <input type="radio" name="q16" value="cardio" id="q16-s" onchange="updateQuestionView();"><label for="q16-s" class="label-q">Sí</label><br>
            <input type="radio" name="q16" value="none" id="q16-n" onchange="updateQuestionView();"><label for="q16-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>17. ¿Experimentas dificultad para respirar incluso cuando no estás haciendo ejercicio?</strong></p>
            <input type="radio" name="q17" value="cardio" id="q17-s" onchange="updateQuestionView();"><label for="q17-s" class="label-q">Sí</label><br>
            <input type="radio" name="q17" value="none" id="q17-n" onchange="updateQuestionView();"><label for="q17-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>18. ¿Tienes palpitaciones o un ritmo cardíaco irregular (latidos rápidos o lentos)?</strong></p>
            <input type="radio" name="q18" value="cardio" id="q18-s" onchange="updateQuestionView();"><label for="q18-s" class="label-q">Sí</label><br>
            <input type="radio" name="q18" value="none" id="q18-n" onchange="updateQuestionView();"><label for="q18-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>19. ¿Tienes hinchazón en las piernas, tobillos o pies sin razón aparente?</strong></p>
            <input type="radio" name="q19" value="cardio" id="q19-s" onchange="updateQuestionView();"><label for="q19-s" class="label-q">Sí</label><br>
            <input type="radio" name="q19" value="none" id="q19-n" onchange="updateQuestionView();"><label for="q19-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>20. ¿Tienes dificultad para realizar actividades físicas que antes podías hacer sin problemas (como caminar, subir escaleras)?</strong></p>
            <input type="radio" name="q20" value="cardio" id="q20-s" onchange="updateQuestionView();"><label for="q20-s" class="label-q">Sí</label><br>
            <input type="radio" name="q20" value="none" id="q20-n" onchange="updateQuestionView();"><label for="q20-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>21. ¿Has tenido episodios de sudoración excesiva sin estar haciendo ejercicio o estar en un lugar caluroso?</strong></p>
            <input type="radio" name="q21" value="cardio" id="q21-s" onchange="updateQuestionView();"><label for="q21-s" class="label-q">Sí</label><br>
            <input type="radio" name="q21" value="none" id="q21-n" onchange="updateQuestionView();"><label for="q21-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>22. ¿Experimentas sensación de ansiedad o presión en el pecho, como si algo estuviera apretando tu corazón?</strong></p>
            <input type="radio" name="q22" value="cardio" id="q22-s" onchange="updateQuestionView();"><label for="q22-s" class="label-q">Sí</label><br>
            <input type="radio" name="q22" value="none" id="q22-n" onchange="updateQuestionView();"><label for="q22-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>23. ¿Te ha costado dormir debido a la falta de aire o molestias en el pecho?</strong></p>
            <input type="radio" name="q23" value="cardio" id="q23-s" onchange="updateQuestionView();"><label for="q23-s" class="label-q">Sí</label><br>
            <input type="radio" name="q23" value="none" id="q23-n" onchange="updateQuestionView();"><label for="q23-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>24. ¿Tienes antecedentes familiares de enfermedades del corazón, como infartos o insuficiencia cardíaca?</strong></p>
            <input type="radio" name="q24" value="cardio" id="q24-s" onchange="updateQuestionView();"><label for="q24-s" class="label-q">Sí</label><br>
            <input type="radio" name="q24" value="none" id="q24-n" onchange="updateQuestionView();"><label for="q24-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>25. ¿Sufres de mareos o desmayos frecuentes sin una causa clara?</strong></p>
            <input type="radio" name="q25" value="cardio" id="q25-s" onchange="updateQuestionView();"><label for="q25-s" class="label-q">Sí</label><br>
            <input type="radio" name="q25" value="none" id="q25-n" onchange="updateQuestionView();"><label for="q25-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>26. ¿Notas cambios en el color de la piel, especialmente en labios o uñas (se vuelven morados o azulados)?</strong></p>
            <input type="radio" name="q26" value="cardio" id="q26-s" onchange="updateQuestionView();"><label for="q26-s" class="label-q">Sí</label><br>
            <input type="radio" name="q26" value="none" id="q26-n" onchange="updateQuestionView();"><label for="q26-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>27. ¿Tienes silbidos o sibilancias al respirar, especialmente al exhalar?</strong></p>
            <input type="radio" name="q27" value="respiratory" id="q27-s" onchange="updateQuestionView();"><label for="q27-s" class="label-q">Sí</label><br>
            <input type="radio" name="q27" value="none" id="q27-n" onchange="updateQuestionView();"><label for="q27-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>28. ¿Te falta el aliento al realizar actividades cotidianas como subir escaleras o caminar?</strong></p>
            <input type="radio" name="q28" value="respiratory" id="q28-s" onchange="updateQuestionView();"><label for="q28-s" class="label-q">Sí</label><br>
            <input type="radio" name="q28" value="none" id="q28-n" onchange="updateQuestionView();"><label for="q28-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>29. ¿Tienes infecciones respiratorias frecuentes, como resfriados o bronquitis que te duran más de lo normal?</strong></p>
            <input type="radio" name="q29" value="respiratory" id="q29-s" onchange="updateQuestionView();"><label for="q29-s" class="label-q">Sí</label><br>
            <input type="radio" name="q29" value="none" id="q29-n" onchange="updateQuestionView();"><label for="q29-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>30. ¿Te despiertas con dificultad para respirar o sientes que te falta el aire durante la noche?</strong></p>
            <input type="radio" name="q30" value="respiratory" id="q30-s" onchange="updateQuestionView();"><label for="q30-s" class="label-q">Sí</label><br>
            <input type="radio" name="q30" value="none" id="q30-n" onchange="updateQuestionView();"><label for="q30-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>31. ¿Has notado que tu tos o dificultad para respirar empeoran en ambientes polvorientos o al exponerte a humo o contaminantes?</strong></p>
            <input type="radio" name="q31" value="respiratory" id="q31-s" onchange="updateQuestionView();"><label for="q31-s" class="label-q">Sí</label><br>
            <input type="radio" name="q31" value="none" id="q31-n" onchange="updateQuestionView();"><label for="q31-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>32. ¿Tienes antecedentes de fumar o has estado expuesto a humo de segunda mano durante un largo período?</strong></p>
            <input type="radio" name="q32" value="respiratory" id="q32-s" onchange="updateQuestionView();"><label for="q32-s" class="label-q">Sí</label><br>
            <input type="radio" name="q32" value="none" id="q32-n" onchange="updateQuestionView();"><label for="q32-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>33. ¿Experimentas ronquera o una sensación de garganta irritada con frecuencia?</strong></p>
            <input type="radio" name="q33" value="respiratory" id="q33-s" onchange="updateQuestionView();"><label for="q33-s" class="label-q">Sí</label><br>
            <input type="radio" name="q33" value="none" id="q33-n" onchange="updateQuestionView();"><label for="q33-n" class="label-q">No</label><br>
        </div>
        <div class="question-card">
            <p><strong>34. ¿Te ha costado mucho tiempo recuperar de un resfriado o gripe, con síntomas respiratorios persistentes?</strong></p>
            <input type="radio" name="q34" value="respiratory" id="q34-s" onchange="updateQuestionView();"><label for="q34-s" class="label-q">Sí</label><br>
            <input type="radio" name="q34" value="none" id="q34-n" onchange="updateQuestionView();"><label for="q34-n" class="label-q">No</label><br>
        </div>
        <div id="navigation-buttons">
            <button type="button" id="prev-btn" disabled>Regresar</button>
            <button type="button" id="next-btn">Siguiente</button>
        </div>
        <div id="submit-button-container">
            <button id="submit-button" type="button" class="btn" onclick="evaluateTest()">Enviar</button>
            <button id="reset-button">Reiniciar Test</button>
        </div>
    </form>

    <h2 id="result"></h2>

    <div id="image-container">
        <img src="img/unitec.png" alt="Logo UNITEC">
    </div>
    <div class="main-content">
        <div class="ad-section" id="ad-left">
            <h5>Anuncio Médico</h5>
            <img src="img/img_a1.png" alt="Anuncio 1">
            <p>Descubre las últimas soluciones para el cuidado de la diabetes.</p>
        </div>

        <div class="ad-section" id="ad-right">
            <h5>Salud y Bienestar</h5>
            <img src="img/img_a2.png" alt="Anuncio 2">
            <p>Consulta con especialistas en enfermedades cardiovasculares.</p>
        </div>
    </div>

    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="JS/test.js"></script>
</body>
</html>
