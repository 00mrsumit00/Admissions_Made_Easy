# Day 30 Python file
def factorial(n):
  if(n == 1 or n == 0):
    return  1
  else:
    return n*factorial(n-1)

print(factorial(5))

def fib(n):
  if(n < 2):
    return 1
  else:
    return fib(n-1) + fib(n-2)

print("Fibonacci series: 0",end = " ")
for i in range(10):
  print(fib(i),end = " ")