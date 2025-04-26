# Day 91 Python file
import threading
import time
from concurrent.futures import ThreadPoolExecutor

def func(sec):
  print(f"The function sleeps for {sec} seconds")
  time.sleep(sec)
  return sec

def main():
  # time1 = time.perf_counter()
  # func(4)
  # func(2)
  # func(1)
  
  # time2 = time.perf_counter()
  # print(time2 - time1)
  
  time3 = time.perf_counter()
  t1 = threading.Thread(target = func,args = [4])
  t2 = threading.Thread(target = func,args = [2])
  t3 = threading.Thread(target = func,args = [1])
  
  t1.start()  # start() function start thread and run it in background and go to next thread
  t2.start()
  t3.start()
  
  # t1.join() # join() wait until the execution of slowest thread completes
  # t2.join()
  # t3.join()
  time4 = time.perf_counter()
  print(time4 - time3)

def poolingDemo():
  with ThreadPoolExecutor() as executor:
    # for single element
    # future1 = executor.submit(func,4)
    # future2 = executor.submit(func,2)
    # future3 = executor.submit(func,1)
    # print(future1.result())
    # print(future2.result())
    # print(future3.result())

    # for a list or iterable
    l  = [3, 4, 2, 8, 6]
    results = executor.map(func,l)
    for result in results:
      print(result)


poolingDemo()