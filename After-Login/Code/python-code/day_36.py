# Day 36 Python file
num = input("Enter a number: ")
print(f"The multiplicaion table of {num} is :")
try:
  for i in range(1,11):
    print(f"{int(num)} X {i} = {int(num) * i}")
except Exception as e:
  print(e)

 
try:
  print("The division is:",3000000/int(num))
except Exception as e:
  print(e)
