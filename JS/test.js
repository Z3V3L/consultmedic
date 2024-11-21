function evaluateTest() {
    const form = document.getElementById("symptomTest");
    const formData = new FormData(form);
    const results = { diabetes: 0, cardio: 0, cancer: 0, respiratory: 0 };

    for (let [key, value] of formData.entries()) {
        if (value !== "none") results[value]++;
    }

    let diagnosis = "No hay síntomas suficientes para determinar una enfermedad específica.";
    let maxScore = 0;

    for (let [key, value] of Object.entries(results)) {
        if (value > maxScore) {
            maxScore = value;
            diagnosis = `Podrías estar mostrando síntomas relacionados con ${key === "diabetes" ? "Diabetes" : key === "cardio" ? "Enfermedades Cardiovasculares" : key === "cancer" ? "Cáncer" : "Enfermedades Respiratorias Crónicas"}.`;
        }
    }

    document.getElementById("result").innerText = diagnosis;
}