# Day 58 Python file
def decorator(func1):
  def funcret():
    print("Executing decorator")
    func1()
    print("Finished executing decorator")
  return funcret

# Simple way to write a decorator
@decorator
def welcome():
  print("Welcome to DCCL")

'''
Another way to write a decorator
welcome = decorator(welcome)
welcome()
'''
welcome()
'''
decorator(welcome)()
'''

# Example if function takes arguments
def deco(fx):
  def mfx(*arg1,**arg2):
    print("Before function ")
    fx(*arg1,**arg2)
    print("Thanks for using this function")
  return mfx

@deco
def add(a,b):
  print("The addition is:",a+b)

add(6,3)

