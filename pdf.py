import sys
from pypdf import PdfReader

reader = PdfReader(sys.argv[1])

num_pages = len(reader.pages)

# getting a specific page from the pdf file
for pn in range(num_pages):
    page = reader.pages[pn]
    # extracting text from page
    text = page.extract_text()
    print(text)

