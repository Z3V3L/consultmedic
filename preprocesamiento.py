import nltk
import sys

from nltk.tokenize import word_tokenize
from nltk.corpus import stopwords
from nltk.stem import WordNetLemmatizer

# Descargar los datos de NLTK
# nltk.download('punkt')
#nltk.download()

#nltk.download('stopwords')
#nltk.download('wordnet')


# Texto de entrada
texto_receta = sys.argv[1]

# Tokenización
palabras = word_tokenize(texto_receta)

# Eliminación de stop words
stop_words = set(stopwords.words('spanish'))
palabras_filtradas = [palabra for palabra in palabras if palabra not in stop_words]

# Lematización
lemmatizer = WordNetLemmatizer()
palabras_lemmatizadas = [lemmatizer.lemmatize(palabra) for palabra in palabras_filtradas]

print(palabras_lemmatizadas)
