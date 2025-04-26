# Day 87 Python file
from functools import lru_cache
import time

@lru_cache(maxsize=None)
def fx(n):
  time.sleep(3)  
  return n*5

print(fx(20))
print("Done for 20")
print(fx(25))
print("Done for 25")
print(fx(6))
print("Done for 6")


# Here the computation in fx() function are already done for value 20 so it return the same value 
print(fx(20))
print("Done for 20")
print(fx(25))
print("Done for 25")
print(fx(6))
print("Done for 6")