# Day 25 Python file
tup = (1,45,52,32,563,741)
print(type(tup),tup)

# tup[0] = 0  Give TypeError because,we cannot modify or change tuple

if 52 in tup:
  print("52 is present is tuple")
else:
  print("52 is not present in tuple")

for i in tup:
  print(i, end = " ")
print()
print(tup[1:4])
print(tup[1:])
print(tup[:5])
print(tup[:])
print(tup[:-2]) # tup[0:len(tup)-2]
print(tup[0:len(tup)-2])