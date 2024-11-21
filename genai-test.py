import google.generativeai as genai

genai.configure(api_key="AIzaSyBofdkhnRNe07Jfl527yWgZAADfsEbEh5s")
model = genai.GenerativeModel("gemini-1.5-flash")
response = model.generate_content(sys.argv[1])
print(response.text)

#Google API key: AIzaSyBofdkhnRNe07Jfl527yWgZAADfsEbEh5s
