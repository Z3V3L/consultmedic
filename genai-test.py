import google.generativeai as genai
import sys

genai.configure(api_key="api_key")
model = genai.GenerativeModel("gemini-1.5-flash")
#response = model.generate_content(sys.argv[1])
#print(response.text)

def generar_codigo_icd10(texto):
    prompt = f"Genera el código ICD-10-CM más probable para el siguiente síntoma: {texto}"
    response = model.generate_content(prompt)
    # Aquí puedes implementar un post-procesamiento para seleccionar el código más probable
    return response.text

if __name__ == "__main__":
    texto = sys.argv[1]
    codigo_icd10 = generar_codigo_icd10(texto)
    print(codigo_icd10)

#Google API key: AIzaSyBofdkhnRNe07Jfl527yWgZAADfsEbEh5s
