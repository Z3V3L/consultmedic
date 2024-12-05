<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Subir archivo | Consultmedic</title>
    <link rel="icon" type="image/x-icon" href="styles/logo_flat.png">
    <link rel="stylesheet" href="CSS/subirArchivo.css">

    <!-- Bootstrap core CSS -->
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel=”stylesheet” href=”https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css” />
    
    <!-- Custom styles for this template -->
    <link href="styles/style.css" rel="stylesheet">

    <!-- Inline styles for canvas -->
    <!--<style>
        body {
            padding: 0;
            margin: 0;
            overflow: hidden;
            background: #000;
        }

        canvas {
            position: absolute;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            z-index: -1; /* Envía el canvas al fondo */
        }

        .container {
            position: relative;
            z-index: 1; /* Asegura que el formulario esté encima */
        }
    </style>-->
</head>
<body class="gradient-background" style="min-height: 100vh;">

    <!-- Lienzo Canvas -->
    <div id="background"></div>

    <!-- Encabezado -->
    <?php include 'header-footer/header.php';?>

    <!-- Contenido principal -->
    <main>
        <div class="container" style="margin-top: 110px;width: 500px;">
            <form action="procesar.php" method="post" enctype="multipart/form-data">
                <h3 class="my-3" style="text-align: center;">Subir una receta o diagnóstico previo</h3>  
                <div class="row">
                    <div class="col">
                        <input type="file" class="form-control mt-2" id="inputSubirArchivo" name="imagen" required>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-3 mt-3">
                        <button class="btn btn-outline-secondary text-center mx-auto" type="submit" value="Upload Image" name="submit">
                            Subir archivo
                        </button>
                    </div>
                </div>
            </form>
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
    </main>

    <!-- Pie de página -->
    <?php include 'header-footer/footer.php';?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pixi.js/7.2.4/browser/pixi.min.js"></script>
    <script>
            const TAU = Math.PI * 2;
            const HALF_PI = Math.PI / 2;

            Math.SineInOut = function(percent, amp) {
                return amp * (Math.sin(percent * TAU - HALF_PI) + 1) * 0.5;
            };

            let app, graphics, space;
            let total_vertices = 6;
            let amplitud = 150;
            let width, height, halfHeight;

            function init() {
                app = new PIXI.Application({ antialias: true, resolution: window.devicePixelRatio, transparent: true });
                document.body.appendChild(app.view);
                //
                graphics = new PIXI.Graphics();
                app.stage.addChild(graphics);
                resize();
                window.addEventListener("resize", resize, false);
            }

            function animate() {
                requestAnimationFrame(animate);
                render();
            }

            function bezier(points) {
                    let size = points.length;
                    let last = size - 4;
                    graphics.moveTo(points[0], points[1]);
                    for (let i = 0; i < size - 2; i += 2) {
                            let x0 = i ? points[i - 2] : points[0];
                            let y0 = i ? points[i - 1] : points[1];
                            let x1 = points[i + 0];
                            let y1 = points[i + 1];
                            let x2 = points[i + 2];
                            let y2 = points[i + 3];
                            let x3 = i !== last ? points[i + 4] : x2;
                            let y3 = i !== last ? points[i + 5] : y2;
                            let cp1x = x1 + (x2 - x0) / 6;
                            let cp1y = y1 + (y2 - y0) / 6;

                            let cp2x = x2 - (x3 - x1) / 6;
                            let cp2y = y2 - (y3 - y1) / 6;
                            graphics.bezierCurveTo(cp1x, cp1y, cp2x, cp2y, x2, y2);
                    }
            }

            function render() {
                let time = new Date().getTime() * 0.001;
                graphics.clear();
                graphics.beginFill(0xFFFFFF);
                let points = [];
                for (let i = 0; i <= total_vertices; i ++) {
                        let x = space * i;
                        let amp = Math.sin(time - i) * amplitud;
                        let y = Math.SineInOut(i / total_vertices, amp);
                        points.push(x, halfHeight + y);
                }
                bezier(points);
                graphics.lineTo(width, height);
                graphics.lineTo(0, height);
                graphics.lineTo(0, halfHeight);
                graphics.endFill();
            }


            function resize() {
                width = window.innerWidth;
                height = window.innerHeight;
                halfHeight = height/2;
                space = width / total_vertices;
                app.renderer.resize(width, height);
            }

            init();
            animate();
    </script>
</body>
</html>
