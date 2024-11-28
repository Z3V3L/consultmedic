import json
import google.generativeai as genai
import sys
import fnmatch
import os

genai.configure(api_key="AIzaSyBofdkhnRNe07Jfl527yWgZAADfsEbEh5s")
model = genai.GenerativeModel("gemini-1.5-flash")

def compare_texts(text1, text2):
    """Compara dos textos utilizando el modelo Gemini.

    Args:
        text1: Primer texto a comparar.
        text2: Segundo texto a comparar.

    Returns:
        Una puntuación que indica la similitud entre los textos.
    """

    prompt = f"Calcula la similitud semántica entre los siguientes textos:\n\nTexto 1: {text1}\n\nTexto 2: {text2}"
    response = model.generate_text(prompt)
    # Extraer la puntuación de similitud de la respuesta del modelo
    # (Esta parte requerirá un procesamiento más específico del output del modelo)
    similarity_score = extract_similarity_score(response)
    return similarity_score

def find_best_match(recipe_text, json_files):
    """Encuentra el archivo JSON con la mejor coincidencia.

    Args:
        recipe_text: Texto de la receta.
        json_files: Lista de nombres de archivos JSON.

    Returns:
        El nombre del archivo JSON con la mejor coincidencia.
    """

    best_match = None
    best_score = 0
    for file in json_files:
        with open(file, 'r') as f:
            data = json.load(f)
            json_text = data["text"]  # Asumimos que el texto está en un campo llamado "text"
            score = compare_texts(recipe_text, json_text)
            if score > best_score:
                best_score = score
                best_match = file
    return best_match

# Ejemplo de uso
recipe_text = "El paciente presenta fiebre, tos y dolor de garganta."
json_dir = "./enfermedades/"
json_files = fnmatch.filter(os.listdir(json_dir), '*.json')
best_file = find_best_match(recipe_text, json_files)

# Cargar y mostrar los datos del archivo JSON seleccionado
with open(best_file, 'r') as f:
    data = json.load(f)
    # Aquí puedes procesar los datos y mostrarlos en una página web
    print(data)
