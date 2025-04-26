# Day 80 Python file
import time
def usingWhile():
  i = 0
  while i < 500:
    i += 1
    print(i)

def usingFor():
  for i in range(500):
    print(i)

# init = time.time()
# usingWhile()
# t1 = time.time() - init
# init = time.time()
# usingFor()
# print(t1)
# print(time.time() - init)

# print("Aiyee")
# time.sleep(3)
# print("Baigan")

t = time.localtime()
formatted_time = time.strftime("%D %H:%M:%S",t)
print(formatted_time)