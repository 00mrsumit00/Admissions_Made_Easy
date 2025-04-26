# Day 47 Python file
x = 3   # Global variable

def welcome():
  global x
  x = 10    # This will change the value of global variable x
  y = 7     # Local variable
  print("The local variable y:",y)

print(x)
welcome()
print(x)
# print(y)  # This will give an error because variable y is a local variable declared in a functon 