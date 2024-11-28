let currentQuestionIndex = 0;
const questions = document.querySelectorAll('.question-card');
const prevBtn = document.getElementById('prev-btn');
const nextBtn = document.getElementById('next-btn');
const submitButton = document.getElementById('submit-button');
const resetButton = document.getElementById('reset-button');

// Actualiza la vista de las preguntas
function updateQuestionView() {
    questions.forEach((question, index) => {
        question.classList.toggle('active', index === currentQuestionIndex);
    });

    prevBtn.disabled = currentQuestionIndex === 0;
    nextBtn.style.display = currentQuestionIndex === questions.length - 1 ? 'none' : 'inline-block';
    submitButton.style.display = currentQuestionIndex === questions.length - 1 ? 'block' : 'none';
    resetButton.style.display = currentQuestionIndex === questions.length - 1 ? 'block' : 'none'; // Mostrar reset solo en última pregunta
    
    // Obtener los radios de la pregunta actual
    const currentQuestion = questions[currentQuestionIndex];
    const radios = currentQuestion.querySelectorAll('input[type="radio"]');

    // Deshabilitar el botón "Siguiente" si ninguno de los radios está seleccionado
    nextBtn.disabled = !Array.from(radios).some(radio => radio.checked);
    submitButton.disabled = !Array.from(radios).some(radio => radio.checked);
}

// Evento para ir a la pregunta anterior
prevBtn.addEventListener('click', () => {
    if (currentQuestionIndex > 0) {
        currentQuestionIndex--;
        updateQuestionView();
    }
});

// Evento para ir a la siguiente pregunta
nextBtn.addEventListener('click', () => {
    if (currentQuestionIndex < questions.length - 1) {
        currentQuestionIndex++;
        updateQuestionView();
    }
});

// Lógica para reiniciar el test con confirmación
resetButton.addEventListener('click', (event) => {
    // Prevenir el comportamiento predeterminado
    event.preventDefault();

    // Mostrar un cuadro de confirmación
    Swal.fire({
        title: '¿Estás seguro?',
        text: "¿Quieres reiniciar el test? Se perderán todas las respuestas.",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonText: 'Sí, reiniciar',
        cancelButtonText: 'Cancelar',
        allowOutsideClick: false, // Evita que se cierre al hacer clic fuera del cuadro
        allowEscapeKey: false, // Evita que se cierre con la tecla escape
    }).then((result) => {
        if (result.isConfirmed) {
            // Restablecer todas las preguntas
            currentQuestionIndex = 0;

            // Limpiar todas las respuestas seleccionadas
            const form = document.getElementById("symptomTest");
            const inputs = form.querySelectorAll('input[type="radio"]');
            inputs.forEach(input => input.checked = false);

            updateQuestionView();

            // Mostrar un mensaje de éxito tras el reinicio
            Swal.fire({
                title: 'Reiniciado',
                text: 'El test ha sido reiniciado con éxito.',
                icon: 'success',
                confirmButtonText: 'Ok',
            });
        }
    });
});

// Evaluar las respuestas del test
function evaluateTest() {
    // Obtener todas las respuestas
    const form = document.getElementById("symptomTest");
    const formData = new FormData(form);
    const responses = {};
    // Crear un arreglo para almacenar los resultados
    const results = []; 
    // Definir el peso de cada enfermedad (número de preguntas)
    const diseaseWeights = {
        diabetes: 8,
        cancer: 7,
        cardio: 11,
        respiratory: 8
    };

    // Contar respuestas para cada enfermedad
    formData.forEach((value) => {
        if (value !== "none") {
            responses[value] = (responses[value] || 0) + 1;
        }
    });

    // Identificar la enfermedad más probable
    const diseases = {
        diabetes: "Diabetes",
        cancer: "Cáncer",
        cardio: "Enfermedades Cardiovasculares",
        respiratory: "Enfermedades Respiratorias Crónicas"
    };

    // Calcular el total de respuestas
    let totalResponses = 0;
    for (const disease in responses) {
        totalResponses += responses[disease];
    }

    // Calcular el porcentaje para cada enfermedad
    for (const disease in responses) {
        const weight = diseaseWeights[disease];
        const percentage = (responses[disease] / weight) * 100;
        //const percentage = (responses[disease] / totalResponses) * 100;
        //console.log(`${diseases[disease]}: ${percentage.toFixed(2)}%`);
        results.push({
            disease: diseases[disease],
            percentage: percentage.toFixed(2)
        });
    }

    console.log(results);

    let probableDisease = null;
    let maxCount = 0;

    for (const disease in responses) {
        if (responses[disease] > maxCount) {
            maxCount = responses[disease];
            probableDisease = disease;
        }
    }

    let enfermedadMasProbable;

    // Ordenar los resultados por porcentaje de mayor a menor
    results.sort((a, b) => b.percentage - a.percentage);

    // Obtener la enfermedad con mayor porcentaje
    if (results.length != 0) {
        enfermedadMasProbable = results[0].disease;
    }else{
        // arreglo no existe o está vacío 
        console.log("results is null");
    }
    


    // Mostrar el resultado en una ventana emergente con SweetAlert
    if (probableDisease) {
        Swal.fire({
            title: "Resultado del Test",
            //text: `Basado en tus respuestas, la posible enfermedad que podrías tener es: ${diseases[probableDisease]}`,
            html: `Basado en las respuestas, sus probabilidades son:<br>`+ results.map(result => `${result.disease}: ${result.percentage}%<br>`).join(''),
            icon: "warning",
            confirmButtonText: "Entendido",
            footer: '<a href="' + obtenerLink(enfermedadMasProbable) + '">Saber más!</a>'
        });
    } else {
        Swal.fire({
            title: "Sin Resultados Significativos",
            text: "No se detectaron síntomas significativos asociados a las enfermedades evaluadas.",
            icon: "info",
            confirmButtonText: "Ok",
        });
    }

    function obtenerLink(enfermedad) {
        switch (enfermedad) {
            case "Diabetes":
                return "procesar_cuestionario.php?enfermedad=diabetes";
            case "Enfermedades Cardiovasculares":
                return "procesar_cuestionario.php?enfermedad=cardiovasculares";
            case "Cáncer":
                return "procesar_cuestionario.php?enfermedad=cancer";
            case "Enfermedades Respiratorias Crónicas":
                return "procesar_cuestionario.php?enfermedad=respiratorias";
            default:
                return "#";
        }
    }
}

// Inicializar la vista
updateQuestionView();
