# Day 35 Python file
for i in range(5):
  print(i,end=" ")
  if i == 4:
    break
else:
  print("If the loop breaks then else block does not execute.\nLoop did no break that's why else block executed.")

print()
i = 0
while i < 5:
  print(i,end=" ")
  i = i+1
  if i > 3:
    break
else:
  print("If the loop breaks then else block does not execute.\nLoop did no break that's why else block executed.")