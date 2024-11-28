#! /usr/bin/env python3
#print('Content-type: text/html\r\n\r')

import sys
import numpy as np
import pandas as pd
import pytesseract
#import matplotlib.pyplot as plt
import cv2
#!pip install pdf2image
from pdf2image import convert_from_path

img=cv2.imread(sys.argv[1])

#plt.figure(figsize=(18,15))
#plt.imshow(img)
#plt.xticks([])
#plt.yticks([])
#plt.show()

text=pytesseract.image_to_string(img,lang='spa')
print(text)

