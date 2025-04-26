# Day 23 Python file
list1 = [1,2,"Avinash",True]
list2 = ["Red","Green","Blue"]
list3 = [1,2,3,4,5,6,7,8,9,10]
# Positive indexing
print(list1[3])

# Negative indexing
print(list1[-2])  # list1[len(list1)-2]

# List slicing
print(list1[:3])  # [0:3]
print(list1[1:])  # [1:len(list1)]
print(list1[:])   # Prints all elements

# List negative slicing
print(list1[0:-3])   # list1[0:len(list1)-3]

# List step index
print(list3[1:11:2])  # 2 is step index 

# Contains item in list
if "Avi" in list1:
  print("Yes")
else:
  print("No")
  
if "Avinash" in list1:
  print("Yes")
else:
  print("No")

# List Comprehension
list4 = [i for i in range(10)]
print(list4)

list4 = [i*i for i in range(10)]
print(list4)

list4 = [i for i in range(10) if i%2==0]
print(list4)