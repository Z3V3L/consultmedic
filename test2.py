import json
import google.generativeai as genai
import sys

genai.configure(api_key="")
model = genai.GenerativeModel("gemini-1.5-flash")

def cargar_archivos_json(paths):
  """Carga los archivos JSON y devuelve una lista de diccionarios."""
  data = []
  for path in paths:
    with open(path, 'r') as f:
      data.append(json.load(f))
  return data

def preprocesar_texto(texto):
  """Realiza el preprocesamiento del texto.
  Aquí puedes implementar tus propias técnicas de preprocesamiento."""
  # Ejemplo básico: tokenización y eliminación de stop words
  # ...
  texto_preprocesado=texto
  return texto_preprocesado

def comparar_textos(texto1, texto2):
  """Utiliza el modelo Gemini para comparar dos textos y devuelve una puntuación."""
  prompt = f"Calcula la similitud semántica entre los siguientes textos:\n{texto1}\n{texto2}"
  response = model.generate_text(prompt)
  # Extraer la puntuación de similitud del resultado
  # ...
  return similitud

# Cargar los archivos JSON
archivos_json = cargar_archivos_json(['enfermedades/cancer.json', 'enfermedades/cardio.json', 'enfermedades/diabetes.json', 'enfermedades/respiratory.json'])

# Obtener el texto de la receta desde la línea de comandos
texto_receta = sys.argv[1]

# Preprocesar el texto de la receta
texto_receta_procesado = preprocesar_texto(texto_receta)

# Comparar el texto de la receta con cada archivo JSON
puntuaciones = []
for archivo in archivos_json:
  similitud = comparar_textos(texto_receta_procesado, archivo['sintomas'])
  puntuaciones.append(similitud)

# Seleccionar el archivo más relevante
indice_max = puntuaciones.index(max(puntuaciones))
archivo_relevante = archivos_json[indice_max]

# Mostrar el contenido del archivo (ejemplo)
print(archivo_relevante['tratamiento'])
