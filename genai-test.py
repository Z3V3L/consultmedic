import google.generativeai as genai
import sys
import fnmatch

genai.configure(api_key=sys.argv[2])
model = genai.GenerativeModel("gemini-1.5-flash")
#prompt = f"De las siguientes 4 enfermedades: [Diabetes: procesar_cuestionario.php?enfermedad=diabetes], [Enfermedades Cardiovasculares: procesar_cuestionario.php?enfermedad=cardiovasculares], [Cáncer: procesar_cuestionario.php?enfermedad=cancer], [Enfermedades Respiratorias Crónicas: procesar_cuestionario.php?enfermedad=respiratorias] con su enlace asociado cuál seleccionarías basándote en el siguiente texto?: {sys.argv[1]}"
prompt = f"De las siguientes 4 enfermedades: [<a href='procesar_cuestionario.php?enfermedad=diabetes'>Diabetes</a>], [<a href='procesar_cuestionario.php?enfermedad=cardiovasculares'>Enfermedades Cardiovasculares</a>], [<a href='procesar_cuestionario.php?enfermedad=cancer'>Cáncer</a>], [<a href='procesar_cuestionario.php?enfermedad=respiratorias'>Enfermedades Respiratorias Crónicas</a>] con su enlace asociado cuál seleccionarías basándote en el siguiente texto?: {sys.argv[1]}"
response = model.generate_content(prompt)
print(response.text)
