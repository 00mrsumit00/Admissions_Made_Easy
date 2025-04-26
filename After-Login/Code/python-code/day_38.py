# Day 38 Python file
class CustomError(Exception):
  pass

a = input("Enter any number between 3 and 9: ")
if a == "quit":
  print("No error")
elif int(a) < 3 or int(a) > 9:
  raise ValueError("Enter a valid number")

try:
  print(int(a)/0)
except CustomError as e:
  print(e)

