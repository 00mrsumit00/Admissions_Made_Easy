# Day 21 Python file
def isGreater(a,b):
  if a == b:
    print("Both are equal")
  elif a > b:
    print("First number is greater")
  else:
    print("Second number is greater")

def isLower(a,b):
  pass


a = int(input("Enter first number: "))
b = int(input("Enter second number: "))
isGreater(a,b)