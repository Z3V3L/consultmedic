from transformers import AutoTokenizer, AutoModelForSequenceClassification
import torch

# Cargar el modelo preentrenado (ejemplo: BERT)
tokenizer = AutoTokenizer.from_pretrained("bert-base-uncased")
model = AutoModelForSequenceClassification.from_pretrained("bert-base-uncased", num_labels=num_etiquetas)

# Preprocesar el texto
texto = "Paciente presenta dolor de cabeza intenso y fiebre"
inputs = tokenizer(texto, return_tensors="pt")

# Obtener las predicciones
with torch.no_grad():
    outputs = model(**inputs)
    logits = outputs.logits

# Convertir los logits en probabilidades y seleccionar el código más probable
probabilidades = torch.softmax(logits, dim=1)
indice_codigo = torch.argmax(probabilidades)
codigo_icd10 = lista_codigos[indice_codigo]

print(codigo_icd10)
