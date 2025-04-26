# Day 85 Python file
import requests
import json

query = input("What topic's news you wamt ?")
url = f"https://newsapi.org/v2/everything?q={query}&from=2023-12-08&sortBy=publishedAt&apiKey=9b0a5decb60d4231bd4b9a174e0ce49c"

r = requests.get(url)
news = json.loads(r.text)  # news is dictionary
# print(news,type(news))
for article in news["articles"]:
  print(article["title"])
  print(article["description"])
  print("________________________________________________________________________")

