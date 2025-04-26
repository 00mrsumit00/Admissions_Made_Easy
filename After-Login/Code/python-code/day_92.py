# Day 92 Python file
import multiprocessing
import requests
from concurrent.futures import ProcessPoolExecutor
import time

time1 = time.perf_counter()

def downloadFile(url,name):
    response = requests.get(url)
    open(f"files/file{name}.jpg","wb").write(response.content)

url = "https://picsum.photos/2400/3600"
# pros = []
# for i in range(5):
#   # downloadFile(url,i)
#   p = multiprocessing.Process(target=downloadFile,args=[url,i])
#   p.start()
#   pros.append(p)

# for p in pros:
#   p.join()

with ProcessPoolExecutor() as executor:
  l1 = [url for i in range(50)]
  l2 = [i for i in range(1, 51)]
  results = executor.map(downloadFile,l1,l2)
  for result in results:
    print(result)


time2 = time.perf_counter()
print(time2 - time1)