# Day 65 Python file
import os
list1 = os.listdir('Clutter')
print(list1)

i = 1
for file in list1:
  if file.endswith('.jpg'):
     os.rename(f"Clutter/{file}",f"Clutter/{i}.png")
     i = i + 1

print(list1)
