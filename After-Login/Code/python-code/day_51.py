# Day 51 Python file
# def square(x):
#   return x**2
def appl(fx,value):
  return 20 + fx(value)
  
square = lambda x:x*x
cube = lambda x: x**3

print("The square:",square(2))
print("The Cube:",cube(2))
print(f"The square of 3 + 20 = {appl(square,3)}") # Passing function to a function

# def square2(x):
#   return x*x

print("The square is",(lambda x:x*x)(5))
