#! /usr/bin/env python3

print('Content-type: text/html\r\n\r')



import pandas as pd
print("<p>Ejecutado exitosamente!</p>")
import cv2
import pytesseract
from pdf2image import convert_from_path

# convert to image using resolution 600 dpi
pages = convert_from_path("scanned.pdf", 600)

# extract text
text_data = ''
for page in pages:
    text = pytesseract.image_to_string(page)
    text_data += text + '\n'
print(text_data)

img=cv2.imread("uploads/Ev-docente.png")


