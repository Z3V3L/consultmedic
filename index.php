<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ConsultMedic</title>
    <link rel="stylesheet" href="CSS/styles.css">
    <link rel="icon" type="image/x-icon" href="styles/logo_flat.png">
</head>
<body>
    <header class="header">
        <div class="logo">
            <a href="#"><img src="img/logo_flat_dark.png" alt="logo"></a>
        </div>
        <nav>
            <ul class="nav-links">
                <li class="nav-links2"><a href="#" class="menu">Inicio</a></li>
                <li class="nav-links2"><a href="cuestionario.php" class="menu">Realizar cuestionario</a></li>
                <li class="nav-links2"><a href="subirArchivo.php" class="menu">Subir archivo</a></li>
                <li class="nav-links2"><a href="#" class="menu">Sobre nosotros</a></li>
            </ul>
        </nav>
    </header>
    <div class="carousel">
        <div class="list">
            <div class="item">
                <img src="img/fondo.jpg" class="fondo1">
                <div class="content">
                    <div class="titulo" id="titulo_consultmedic">ConsultMedic</div>
                    <div class="topic">Tu salud, nuestra prioridad</div>
                </div>
            </div>
        </div>
    </div>

    <div class="carousel2">
        <div class="list">
            <div class="item">
                <img src="img/fondo2.jpg" class="fondo2">
                <div class="content2">
                    <div class="titulo2">Diabetes</div>
                    <div class="topic2">Sintomas y Causas</div>
                    <div class="des2">Sed excesiva, micción frecuente, fatiga y pérdida de peso 
                        inexplicable. </div> <br>
                    <div class="des2">La diabetes tipo 1 tiene un origen autoinmune, mientras que la 
                        diabetes tipo 2 está relacionada con factores de riesgo como la obesidad, 
                        el sedentarismo y la predisposición genética.</div>
                    <div class="btn">
                        <button id="startTest"  class="btn1" >Test</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/fondo3.jpg" class="fondo2">
                <div class="content3">
                    <div class="titulo3">Cancer</div>
                    <div class="topic3">Sintomas y Causas</div>
                    <div class="des2">Los síntomas varían dependiendo del tipo de cáncer, pero 
                        comúnmente incluyen pérdida de peso inexplicable, fatiga, dolores 
                        persistentes y la aparición de bultos o masas en el cuerpo. </div> <br>
                    <div class="des2"> Factores genéticos, exposición a carcinógenos como el humo del 
                        tabaco, la radiación y ciertas sustancias químicas, así como infecciones 
                        crónicas (por ejemplo, virus del papiloma humano en el cáncer cervical).</div>
                    <div class="btn">
                        <button id="btnTest" class="btn2">Test</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/fondo4.jpg" class="fondo2">
                <div class="content4">
                    <div class="tit">Enfermedades</div>
                    <div class="titulo4">Cardiovasculares</div>
                    <div class="topic4">Sintomas y Causas</div>
                    <div class="des2"> Dificultad para respirar, dolores en el pecho, fatiga, y en casos 
                        graves, parálisis o pérdida de función en una parte del cuerpo, que son 
                        comunes en los ACV. </div> <br>
                    <div class="des2">La hipertensión, el tabaquismo, el sedentarismo, la obesidad, la 
                        diabetes y una dieta rica en grasas y sal son factores que contribuyen a las 
                        ECV.</div>
                    <div class="btn">
                        <button id="btnTest2" class="btn3">Test</button>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/fondo5.jpg" class="fondo2">
                <div class="content5">
                    <div class="tit">Enfermedades</div>
                    <div class="titulo5">Respiratorias Cronicas</div>
                    <div class="topic5">Sintomas y Causas</div>
                    <div class="des2"> Tos crónica, sibilancias, dificultad para respirar y producción 
                        excesiva de esputo.</div> <br>
                    <div class="des2"> El tabaquismo es la principal causa de la EPOC, aunque la 
                        exposición prolongada a contaminantes del aire también es un factor 
                        significativo. En el caso del asma, los desencadenantes incluyen 
                        alérgenos, el ejercicio físico y factores ambientales.</div>
                    <div class="btn">
                        <button id="btnTest3" class="btn4">Test</button>
                    </div>                
                </div>
            </div>
        </div>

        <div class="thumbnail">
            <div class="item">
                <img src="img/fondo3.jpg">
                <div class="content2">
                    <div class="titulo2">
                        Cancer
                    </div>
                    <div class="des2">
                        Descripcion
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/fondo4.jpg">
                <div class="content2">
                    <div class="titulo2">
                        Enfermedades
                    </div>
                    <div class="des2">
                        Cardio...
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/fondo5.jpg">
                <div class="content2">
                    <div class="titulo2">
                        Enfermedades
                    </div>
                    <div class="des2">
                        Respiratorias
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/fondo2.jpg">
                <div class="content2">
                    <div class="titulo2">
                        Diabetes
                    </div>
                    <div class="des2">
                        Descripcion
                    </div>
                </div>
            </div>
        </div>

        <div class="arrows">
            <button id="prev"><</button>
            <button id="next">></button>
        </div>
        <div class="time"></div>
    </div>

    <script src="JS/interaccion.js"></script>
</body>
</html>