import requests

url = '185.27.134.176:80'
response = requests.get(url)
data = response.json()

print(data)
