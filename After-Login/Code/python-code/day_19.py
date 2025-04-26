# Day 19 Python file
i = 0
while i <=5:
  print(i)
  i = i+1
else:
  print("Done with the loop")

# Emulating do while loop in python
while True:
  a = int(input("Enter a positive number: "))
  if not a >= 0:
    print(a,"is negative mumber")
  else:
    print(a,"is a positive number")
    break
